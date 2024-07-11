<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $admin = new User();
        $admin->setEmail('admin@sss.com');
        $admin->setPassword('admin');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setUsername('admin');
        $manager->persist($admin);

        $category1 = new Category();
        $category1->setName('Rings')
            ->setSlug('rings');

        $category2 = new Category();
        $category2->setName('Bracelets')
            ->setSlug('bracelets');

        $category3 = new Category();
        $category3->setName('Neckless')
            ->setSlug('neckless');

        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);

        for ($i = 0; $i < 5; $i++) {
            $post = new Post();
            $post->setTitle('Title ' . $i);
            $post->setSlug('title' . $i);
            $post->setContent('Content ' . $i);
            $post->setImage('https://placehold.co/600x400');
            $post->setCategory($category1);
            $post->setActive(true);
            $post->setUser($admin);
            $post->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($post);
        }

        for ($i = 5; $i < 8; $i++) {
            $post = new Post();
            $post->setTitle('Title ' . $i);
            $post->setSlug('title' . $i);
            $post->setContent('Content ' . $i);
            $post->setImage('https://placehold.co/600x400');
            $post->setCategory($category2);
            $post->setActive(true);
            $post->setUser($admin);
            $post->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($post);
        }

        for ($i = 8; $i < 10; $i++) {
            $post = new Post();
            $post->setTitle('Title ' . $i);
            $post->setSlug('title' . $i);
            $post->setContent('Content ' . $i);
            $post->setImage('https://placehold.co/600x400');
            $post->setCategory($category3);
            $post->setActive(true);
            $post->setUser($admin);
            $post->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($post);
        }

        $manager->flush();
    }
}

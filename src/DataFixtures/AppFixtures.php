<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Create and persist articles
        for ($i = 1; $i <= 10; $i++) {
            $article = new Article();
            $article->setTitre("Article $i");
            $article->setContenu("Content for Article $i");
            $manager->persist($article);
        }

        $manager->flush();
    }
}

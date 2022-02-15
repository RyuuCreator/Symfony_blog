<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 1000; $i++) {
            $article = new Article();
            $article->setTitle('article '.$i);
            // $article->setPicture('imgDefault.jpg');
            $article->setContent('content lorem ipsum'.$i);
            $article->setPublicationDate(new \DateTime());
            $article->setLastUpdateDate(new \DateTime());
            $article->setIsPublished(true);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
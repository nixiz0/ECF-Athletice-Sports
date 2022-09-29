<?php

namespace App\DataFixtures;

use App\Entity\Option;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    public function implementOption(ObjectManager $manager): void
    {
        $option = new Option();
        $option->setIsActive(true);
        $option->setNameOption('Livres Nutritions');
        $manager->persist($option);
        $manager->flush();
    }
}    

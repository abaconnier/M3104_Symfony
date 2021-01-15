<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Stage;

class AppFictures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Creation d'un generateur de donnees Faker
        $faker = \Faker\Factory::create('fr_FR');

        $stage1 = new Stage();
        $stage1->setIntitule($faker->regexify('Stage[1-5]'));
        $stage1->setMission($faker->realText($maxNbChars = 25, $indexSize = 2));
        $stage1->setAdresseMail("labordepatisser@gmail.com");
        $manager->persist($stage1);

        $manager->flush();
    }
}

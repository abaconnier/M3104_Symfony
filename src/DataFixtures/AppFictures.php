<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Stage;

class AppFictures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $stage1 = new Stage();
        $stage1->setIntitule("Stage patissier");
        $stage1->setMission("Faire des gâteaux et des chocolatines !");
        $stage1->setAdresseMail("labordepatisser@gmail.com");
        $manager->persist($stage1);

        $manager->flush();
    }
}

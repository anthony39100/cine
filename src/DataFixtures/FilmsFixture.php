<?php

namespace App\DataFixtures;
use App\Entity\Films;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmsFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=0;$i<10;$i++){
            $films=new Films();
            $date = "01-09-2015";
            $films->setTitre('harry potter'.$i);
            $films->setcategorie("action");
            $films->setDateAt(\DateTime::createFromFormat('d-m-Y',$date));
            $films->setrealisateur('chris colombus');
            $films->setaffiche('http');
            $manager->persist($films);
        }

        $manager->flush();
    }
}

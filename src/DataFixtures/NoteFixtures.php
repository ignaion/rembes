<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Note;

class NoteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 50; $i++) { 
            $note = new Note();
            $note
                ->setTitle('ABC  '.$i)
                ->setContent('ABC Content')
                ->setCreatedDate(new \DateTime())
            ;
    
            $manager->persist($note);
        }
      
        $manager->flush();
    }
}

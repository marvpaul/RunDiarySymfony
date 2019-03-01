<?php
/* src/DataFixtures/MyUserFixture.php */

namespace App\DataFixtures;


use App\Entity\Entry;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Date;

class MyEntryFixture extends Fixture {
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager) {
        $entry1 = new Entry();
        $entry1->setAvgSpeed(10.0);
        $dateInput = "2014-01-01";
        $date = $date = new DateTime();
        $date->setTimestamp(strtotime($dateInput));
        $entry1->setDate($date);
        $entry1->setDistance(12);
        $entry1->setTime(1.2);
        $entry1->setUserId(2);
        $manager->persist($entry1);

        $entry2 = new Entry();
        $entry2->setAvgSpeed(2.0);
        $dateInput = "2013-01-01";
        $date = $date = new DateTime();
        $date->setTimestamp(strtotime($dateInput));
        $entry2->setDate($date);
        $entry2->setDistance(10);
        $entry2->setTime(5);
        $entry2->setUserId(2);
        $manager->persist($entry2);


        print("Creating some entries");
        $manager->flush();

    }
}
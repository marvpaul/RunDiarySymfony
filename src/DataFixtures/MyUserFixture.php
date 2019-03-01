<?php
/* src/DataFixtures/MyUserFixture.php */

namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MyUserFixture extends Fixture {
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager) {
        $user1 = new User();
        $user1->setName('peter');
        $user1->setPass($this->encoder->encodePassword($user1, 'p4s5w0rt'));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('marvin');
        $user2->setPass($this->encoder->encodePassword($user2, 'sth'));
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName('martin');
        $user3->setPass($this->encoder->encodePassword($user3, 'sth'));
        $manager->persist($user3);

        $user4 = new User();
        $user4->setName('merry');
        $user4->setPass($this->encoder->encodePassword($user4, 'sth'));
        $manager->persist($user4);

        $user5 = new User();
        $user5->setName('Mark');
        $user5->setPass($this->encoder->encodePassword($user5, 'sth'));
        $manager->persist($user5);

        print("Creating some users");
        // actually executes the queries (i.e. the INSERT query)
        $manager->flush();

    }
}
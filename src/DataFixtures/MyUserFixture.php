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

        // actually executes the queries (i.e. the INSERT query)
        $manager->flush();

    }
}
<?php
/* src/DataFixtures/MyUserFixture.php */

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MyUserFixture extends Fixture {
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager) {
        $user1 = new User();
        $user1->setUsername('peter');
        $user1->setPassword($this->encoder->encodePassword($user1, 'p4s5w0rt'));
        $manager->persist($user1);

        /* ... */
    }
}
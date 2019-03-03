<?php
/**
 * Created by PhpStorm.
 * User: marvinkruger
 * Date: 2019-02-28
 * Time: 19:57
 */

use App\Entity\User;
use App\Service\UserStatisticsGenerator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class UserStatisticsTest extends WebTestCase
{
    /**
     * Generates user statistics for all users and check if they where generated correctly
     */
    public function testUserStatisticsGenerationForAllUsers()
    {
        self::bootKernel();

        // returns the real and unchanged service container
        $container = self::$kernel->getContainer();

        // gets the special container that allows fetching private services
        $container = self::$container;

        $usersWithStats = self::$container->get(UserStatisticsGenerator::class)->getStatisticsForAllUsers();

        foreach ($usersWithStats as $userWithStat) {
            if($userWithStat->getName() == 'marvin') {
                $this->assertTrue($userWithStat->days_trained == 2);
            } else {
                $this->assertTrue($userWithStat->days_trained == 0);
            }
        }
    }

    /**
     * Generates user statistics for one user and check if this statistics where generated correctly
     */
    public function testUserStatisticsGenerationForOneUser()
    {
        self::bootKernel();

        // returns the real and unchanged service container
        $container = self::$kernel->getContainer();

        // gets the special container that allows fetching private services
        $container = self::$container;

        $userWithStats = self::$container->get(UserStatisticsGenerator::class)->getStatisticsUser("marvin");
        $this->assertTrue($userWithStats->days_trained == 2);
        $this->assertTrue($userWithStats->entire_distance == 22);
    }
}
<?php

namespace App\Service;

use App\Entity\Entry;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

class UserStatisticsGenerator
{

    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * Get all user data from database and enrich the data with some statistics about:
     * - entire distance
     * - nr of trainings days
     *
     * @return array of all available users including some statistics about this users, e.g. days of training
     */
    public function getStatisticsForAllUsers()
    {
        $users = $this->em
            ->getRepository(User::class)
            ->findAll();

        // Convert into a array / dictionary where id of the user is key and the user itself is the value
        $user_ids = array_map(function ($user) {
            return $user->getId();
        }, $users);
        $users = array_combine($user_ids, $users);

        //Get all entries
        $entries = $this->em
            ->getRepository(Entry::class)
            ->findAll();

        // Fill with default values
        $entriesPerUser = null;
        foreach ($users as $user) {
            $user->days_trained = 0;
            $user->entire_distance = 0;
        }

        //Go through each entry and create statistics
        foreach ($entries as $entry) {
            $users[$entry->getUserId()]->entire_distance += $entry->getDistance();
            $users[$entry->getUserId()]->days_trained += 1;
        }

        return array_values($users);
    }

    /**
     * @param string $username a certain username to search for in database
     * @return object|null a certain user including some statistics or null in case no user with certain username was found
     * @throws \Exception
     */
    public function getStatisticsUser(string $username)
    {
        $user = $this->em
            ->getRepository(User::class)
            ->findOneBy(['name' => $username]);
        //Get all user entries
        if ($user) {
            $entries = $this->em
                ->getRepository(Entry::class)
                ->findBy(['user_id' => $user->getId()]);

            $entire_distance = 0;
            $days_between = 0;
            foreach ($entries as $entry) {
                $entire_distance += $entry->getDistance();
            }

            if (count($entries) >= 2) {
                uasort($entries, function ($a, $b) {
                    return $b->getDate()->getTimestamp() - $a->getDate()->getTimestamp();
                });
                $start_date = $entries[0]->getDate();
                $end_date = new DateTime();
                $days_between = floor(abs($start_date->getTimestamp() - $end_date->getTimestamp()) / 86400);
            }

            $user->entries = $entries;
            $user->days_trained = count($entries);
            $user->entire_time = $days_between;
            $user->entire_distance = $entire_distance;
            return $user;
        } else {
            return null;
        }
    }
}
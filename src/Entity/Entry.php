<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntryRepository")
 */
class Entry
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /** @ORM\Column(type="date") */
    private $date;

    /** @ORM\Column(type="time") */
    private $time;

    /** @ORM\Column(type="decimal") */
    private $distance;

    /** @ORM\Column(type="decimal") */
    private $avg_speed;



}

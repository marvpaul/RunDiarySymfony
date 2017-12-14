<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Validator\Constraints as AcmeAssert;

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

    /** @ORM\Column(type="date")
     *  @Assert\Type(
     *     type="datetime",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @Assert\LessThan(
     *     "now",
     *     message="Date cant be in future"
     * )*/
    private $date;

    /** @ORM\Column(type="time")
     *  @Assert\Type(
     *     type="datetime",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @AcmeAssert\SmallTime
     */
    private $time;

    /** @ORM\Column(type="decimal")
     *  @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @Assert\GreaterThan(
     *     0,
     *     message="Value must be greater than 0"
     * )
     */
    private $distance;

    /** @ORM\Column(type="decimal") */
    private $avg_speed;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getAvgSpeed()
    {
        return $this->avg_speed;
    }

    /**
     * @param mixed $avg_speed
     */
    public function setAvgSpeed($avg_speed)
    {
        $this->avg_speed = $avg_speed;
    }




}

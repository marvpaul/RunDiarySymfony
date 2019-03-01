<?php

namespace App\Service;

use App\Entity\Entry;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Runner\Exception;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Translation\TranslatorInterface;

class EntryService
{

    private $em;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator
    ) {
        $this->em = $entityManager;
        $this->trans = $translator;
    }

    /**
     * Deletes a certain profile entry from database.
     *
     * @param int $entryId the id of the entry a user wants to delete
     * @param int $userId the id of the user which owns the entry
     */
    public function deleteEntry(
        int $entryId,
        int $userId
    ) {
        $entry = $this->em
            ->getRepository(Entry::class)
            ->findOneBy(['id' => $entryId, 'user_id' => $userId]);
        $this->em->remove($entry);
        $this->em->flush();
    }

    public function addEntry(
        Entry $entry
    ) {
        //Push the new entry to db
        $this->em->persist($entry);
        $this->em->flush();
    }

    public function parseEntryFromForm($form, $userId){
        $distance = $form[$this->trans->trans('Distance')]->getData();
        $date = $form[$this->trans->trans('Date')]->getData();
        $time = $form[$this->trans->trans('Time')]->getData();
        $hours = (float)($time->getTimestamp()+3600) / 60 / 60;
        $entry = new Entry();
        $entry->setDate($date);
        $entry->setDistance($distance);
        $entry->setUserId($userId);
        $entry->setTime($hours);

        if($hours > 0){
            //Set avg speed
            $avg_speed = round($entry->getDistance() / $entry->getTime(), 2);
            $entry->setAvgSpeed($avg_speed);
        }

        return $entry;
    }


}
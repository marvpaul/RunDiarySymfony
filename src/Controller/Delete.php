<?php

namespace App\Controller;

use App\Service\EntryService;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Translation\TranslatorInterface;

class Delete extends AbstractController
{
    /**
     * Route to delete a certain entry given a userId and an entryId.
     * Note: You can only delete entries in case you're logged in and you're the owner of the entry!
     * @Route("/delete/{entryId}/{userId}", name="deleteEntry")
     * @param int $entryId the id of the entry a user wants to delete
     * @param int $userId the id of the user which owns the entry
     * @param TranslatorInterface $translator
     * @param EntryService $deleteEntryService
     * @param UserInterface|null $loggedin_user
     * @return Response redirects to the profile of the logged in user
     */
    public function delete(
        int $entryId,
        int $userId,
        TranslatorInterface $translator,
        EntryService $deleteEntryService,
        UserInterface $loggedin_user = null
    ) {

        //The user which wanna to delete an entry is logged in as this user
        if ($loggedin_user->getId() == $userId) {

            $deleteEntryService->deleteEntry($entryId, $userId);

            $this->addFlash(
                'notice',
                $translator->trans('Entry deleted successfully!')
            );
        } else {
            $this->addFlash(
                'notice',
                $translator->trans('You can not delete an entry which you do not own!')
            );
        }

        //Redirect back to profile
        return $this->redirectToRoute('profile', array('username' => $loggedin_user->getName()));

    }
}
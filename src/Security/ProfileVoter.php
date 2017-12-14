<?php
namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * Created by IntelliJ IDEA.
 * User: marvinkruger
 * Date: 14.12.17
 * Time: 16:03
 */

class ProfileVoter extends Voter
{

    /**
     * Determines if the attribute and subject are supported by this voter.
     *
     * @param string $attribute An attribute
     * @param mixed $subject The subject to secure, e.g. an object the user wants to access or any other PHP type
     *
     * @return bool True if the attribute and subject are supported, false otherwise
     */
    protected function supports($attribute, $subject)
    {
        return ($subject instanceof User && $attribute == 'edit');
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        return ($subject === $token->getUser());
    }
}
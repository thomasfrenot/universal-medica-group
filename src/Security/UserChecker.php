<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof User) {
            return;
        }

        if (true === in_array('ROLE_ADMIN', $user->getRoles())) {
            throw new CustomUserMessageAccountStatusException('Pour vous connecter en tant qu\'administrateur, utiliser le formulaire Espace administrateur.');
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
    }
}

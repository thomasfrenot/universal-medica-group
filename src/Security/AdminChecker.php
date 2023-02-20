<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof User) {
            return;
        }

        if (false === in_array('ROLE_ADMIN', $user->getRoles())) {
            throw new CustomUserMessageAccountStatusException('Vous devez être administrateur pour vous connecter à l\'espace administrateur.');
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
    }
}

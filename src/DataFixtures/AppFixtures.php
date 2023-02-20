<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher) {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // User frontend
        $userFrontend = new User();
        $userFrontend->setEmail('frontend@test.dev');
        $userFrontend->setRoles(['ROLE_USER']);

        $hashedPassword = $this->passwordHasher->hashPassword(
            $userFrontend,
            'universal'
        );
        $userFrontend->setPassword($hashedPassword);

        $manager->persist($userFrontend);

        // User backend
        $userBackend = new User();
        $userBackend->setEmail('backend@test.dev');
        $userBackend->setRoles(['ROLE_USER', 'ROLE_ADMIN']);

        $hashedPassword = $this->passwordHasher->hashPassword(
            $userBackend,
            'universal'
        );
        $userBackend->setPassword($hashedPassword);

        $manager->persist($userBackend);

        $manager->flush();
    }
}

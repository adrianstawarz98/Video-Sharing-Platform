<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $password_encoder)
    {
        $this->password_encoder = $password_encoder;
    }
    public function load(ObjectManager $manager)
    {
        foreach ($this->getuserData() as [$name, $last_name, $email, $password, $api_key, $roles]) {
            $user = new User();
            $user->setName($name);
            $user->setLastName($last_name);
            $user->setEmail($email);
            $user->setPassword($this->password_encoder->encodePassword($user, $password));
            $user->setVimeoApiKey($api_key);
            $user->setRoles($roles);
            $manager->persist($user);
        }
        $manager->flush();
    }
    private function getUserData(): array
    {
        return [

            ['John', 'Wayne', 'as@wp.pl', 'passw', '59182d120a00e35d12751eafb6236da2', ['ROLE_ADMIN']],
            ['adrian', 'stawarz', 'adrianstawarz98@wp.pl', 'stwarz10233', null, ['ROLE_ADMIN']],
            ['Jakub', 'Wayne', 'aadads@wp.pl', 'passw', null, ['ROLE_USER']],
            ['Max', 'Power', 'maxpower199@gmail.com', '123456q', null, ['ROLE_USER']],
            ['Ted', 'Bundy', '123@gmail.com', 'passw', null, ['ROLE_USER']]

        ];
    }
}

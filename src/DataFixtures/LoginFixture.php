<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
<<<<<<< HEAD
use app\Entity\Login;
<<<<<<< HEAD
<<<<<<< HEAD
use App\DataFixtures\AppFixtures;
use App\DataFixtures\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\Hasher\MigratingPasswordHasher;
=======
use App\Entity\Login;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

>>>>>>> d7ae1b0c (fixtures login et hashage)

class LoginFixture extends Fixture
{

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
      $this->encoder = $encoder;
    }
=======
use app\src\DataFixtures\AppFixtures;
=======
use App\DataFixtures\AppFixtures;
<<<<<<< HEAD
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

>>>>>>> f087724d (fixtures en cours)
=======
use App\DataFixtures\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\Hasher\MigratingPasswordHasher;
>>>>>>> 40c45ec0 (fixture en cours)

class LoginFixture extends Fixture
{
    private $encoder;

<<<<<<< HEAD
>>>>>>> 8725867a (modifs hash)
=======
    public function __construct(UserPasswordHasherInterface $encoder)
    {
      $this->encoder = $encoder;
    }
>>>>>>> f087724d (fixtures en cours)

    public function load(ObjectManager $manager): void
    {
        $login = new Login();
          $login->setLogin("admin@test.com");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
          $login->setPassword($this->encoder->encodePassword($login));
=======
          $login->setPassword($this->encoder->encodePassword($login, '123456'));
>>>>>>> 8725867a (modifs hash)
=======
          $login->setPassword($this->encoder->encodePassword($login));
>>>>>>> f087724d (fixtures en cours)
=======
          $login->setPassword($this->encoder->encodePassword($login, "123456"));
>>>>>>> d7ae1b0c (fixtures login et hashage)


        // $product = new Product();
        // $manager->persist($product);
        $manager->persist($login);
        $manager->flush();
    }
}
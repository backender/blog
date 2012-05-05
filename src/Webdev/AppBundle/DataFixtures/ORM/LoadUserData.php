<?php
namespace Webdev\AppBundle\DateFixtures\ORM;

use FOS\UserBundle\Entity\UserManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Webdev\AppBundle\Entity\User;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	public function getOrder() {
		return 1;
	}

	private $container;

	public function setContainer(ContainerInterface $container = null) {
		$this->container = $container;
	}

	public function load(ObjectManager $manager)
	{
		$userManager = $this->container->get('fos_user.user_manager');
		
		$user = $userManager->createUser();
		$user->setUsername('John');
		$user->setEmail('john.doe@example.com');
		$user->setPlainPassword('12345');
		$user->setEnabled("1");
		
		$userManager->updateUser($user);
	}
}
	
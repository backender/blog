<?php
namespace Webdev\BlogBundle\DateFixtures\ORM;

use FOS\UserBundle\Entity\UserManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;

use Webdev\BlogBundle\Entity\Post;
use Webdev\BlogBundle\Entity\Tag;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPostData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	public function getOrder()
	{
		return 3;
	}
	
	private $container;
	
	public function setContainer(ContainerInterface $container = null) {
		$this->container = $container;
	}
	
	public function load(ObjectManager $manager)
	{
		$userManager = $this->container->get('fos_user.user_manager');
		$user1 = $userManager->findUserByUsername('marc');
		
		$post1 = new Post();
		$post1->setTitle('symfony2 Tutorial');
		$post1->setSlug('symfony2-tutorial');
		$post1->setContent('<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>');
		$post1->addTag($this->getReference('tag1'));
		$post1->addTag($this->getReference('tag2'));
		$post1->addTag($this->getReference('tag3'));
		$post1->setUser($user1);
		
		$manager->persist($post1);

		$manager->flush();
		
		$this->addReference('post1', $post1);
	}
}
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
use Webdev\BlogBundle\Entity\Comment;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;


class LoadCommentData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	public function getOrder()
	{
		return 4;
	}
	
	private $container;
	
	public function setContainer(ContainerInterface $container = null) {
		$this->container = $container;
	}
	
	public function load(ObjectManager $manager)
	{
		$userManager = $this->container->get('fos_user.user_manager');
		$user1 = $userManager->findUserByUsername('John');
				
		$comment1 = new Comment();
		$comment1->setPost($this->getReference('post1'));
		$comment1->setUser($user1);
		$comment1->setCreatedAt(new \DateTime());
		$comment1->setContent('Lorem ipsum...');
		$manager->persist($comment1);
		
		$comment11 = new Comment();
		$comment11->setOrigin($comment1);
		$comment11->setUser($user1);
		$comment11->setCreatedAt(new \DateTime());
		$comment11->setContent('Lorem ipsum of comment1 but this is comment11');
		$manager->persist($comment11);

		$manager->flush();
	}
}
<?php
namespace Webdev\BlogBundle\DateFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Webdev\BlogBundle\Entity\Comment;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Webdev\BlogBundle\Entity\Post;
use Webdev\BlogBundle\Entity\Tag;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCommentData extends AbstractFixture implements OrderedFixtureInterface
{
	public function getOrder()
	{
		return 5;
	}
	
	public function load(ObjectManager $manager)
	{
		$comment1 = new Comment();
		$comment1->setPost($this->getReference('post1'));
		$comment1->setUser($this->getReference('manuel'));
		$comment1->setCreatedAt(new \DateTime());
		$comment1->setContent('Lorem ipsum...');
		$manager->persist($comment1);
		
		$comment11 = new Comment();
		$comment11->setOrigin($comment1);
		$comment11->setUser($this->getReference('max'));
		$comment11->setCreatedAt(new \DateTime());
		$comment11->setContent('Lorem ipsum of comment1 but this is comment11');
		$manager->persist($comment11);

		$manager->flush();
	}
}
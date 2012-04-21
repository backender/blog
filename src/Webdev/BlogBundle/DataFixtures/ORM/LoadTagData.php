<?php
namespace Webdev\BlogBundle\DateFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Webdev\BlogBundle\Entity\Post;
use Webdev\BlogBundle\Entity\Tag;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTagData extends AbstractFixture implements OrderedFixtureInterface
{
	public function getOrder()
	{
		return 1;
	}
	
	public function load(ObjectManager $manager)
	{
		$tag1 = new Tag();
		$tag1->setName('symfony 2');
		$tag1->setQuantifier(3);
		
		$tag2 = new Tag();
		$tag2->setName('Tutorial');
		$tag2->setQuantifier(1);
		
		$tag3 = new Tag();
		$tag3->setName('PHP');
		$tag3->setQuantifier(6);
		
		$manager->persist($tag1);
		$manager->persist($tag2);
		$manager->persist($tag3);
		
		$manager->flush();
		
		$this->addReference('tag1', $tag1);
		$this->addReference('tag2', $tag2);
		$this->addReference('tag3', $tag3);
	}
}
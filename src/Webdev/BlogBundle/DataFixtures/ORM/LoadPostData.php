<?php
namespace Webdev\BlogBundle\DateFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Webdev\BlogBundle\Entity\Post;
use Webdev\BlogBundle\Entity\Tag;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{
	public function getOrder()
	{
		return 2;
	}
	
	public function load(ObjectManager $manager)
	{
		$post1 = new Post();
		$post1->setTitle('symfony2 Tutorial');
		$post1->setSlug('symfony2-tutorial');
		$post1->setContent('<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>');
		$post1->addTag($this->getReference('tag1'));
		$post1->addTag($this->getReference('tag2'));
		$post1->addTag($this->getReference('tag3'));
		
		$post2 = new Post();
		$post2->setTitle('second symfony post');
		$post2->setSlug('second-symfony-post');
		$post2->setContent('<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>');
		$post2->addTag($this->getReference('tag1'));
		$post2->addTag($this->getReference('tag2'));
		//$post2->addTag($this->getReference('tag3'));
		
		$manager->persist($post1);
		$manager->persist($post2);

		$manager->flush();
		
		$this->addReference('post1', $post1);
		$this->addReference('post2', $post2);
	}
}
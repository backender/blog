<?php

namespace Webdev\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/post/symfony2-tutorial');

        $this->assertTrue($crawler->filter('h2:contains("symfony2 Tutorial")')->count() > 0);
    }
    
    public function testPostLoader()
    {
    	$client = static::createClient();
    	
        $crawler = $client->request('GET', '/post/symfony2-tutorial');
    	    	
    	$this->assertEquals($crawler->filterXPath('/html/body/div/div[2]/ul/li/a')->text(), 'symfony 2');
    }
}

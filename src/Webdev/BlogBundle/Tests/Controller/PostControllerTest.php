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
}

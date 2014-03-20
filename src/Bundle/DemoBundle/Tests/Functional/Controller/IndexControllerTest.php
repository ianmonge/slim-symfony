<?php

namespace Bundle\DemoBundle\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $content = $client->getResponse()->getContent();

        $this->assertNotEmpty(json_decode($content, true));
    }
}
<?php

namespace JoBeetBundle\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JobControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = static::createClient();

        $client->request('GET', '/job');
        $this->assertEquals('JoBeetBundle\Controller\JobController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }
}

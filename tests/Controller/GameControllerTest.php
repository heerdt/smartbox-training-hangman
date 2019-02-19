<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GameControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testGame()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/game');
    }

    public function testWon()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/game/won');
    }

    public function testFailed()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/game/failed');
    }

}

<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomePage extends WebTestCase
{
    public function HomeTest(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/home');

        $this->assertResponseIsSuccessful();

        $button = $crawler->filter('btn btn-primary');
        $this->assertEquals(1, count($button));
        $this->assertSelectorTextContains('h2', 'Bienvenue chez Athletice !');
    }
}
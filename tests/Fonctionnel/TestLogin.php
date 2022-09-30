<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class LoginTest extends WebTestCase
{
    public function LoginSuccessTest(): void
    {        
        /** @var UrlGeneratorInterface $urlGenerator */ 
        // Ici l'urlgenerator permet de récupérer notre route

        $client = static::createClient();
        
        $urlGenerator = $client->getContainer()->get("router");
        $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

        // On met un vrai compte avec un vrai mot de passe pour voir si ça fonctionne
        $form = $crawler->filter("form[name=login]")->form([
            "email"=> "Bert@outlook.fr",
            "password"=> "azerty"
        ]);


        $client->submit($form);
        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $client->followRedirect();

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Bienvenue chez Athletice !');
    }


    public function LoginProblemsTest(): void
    {        
        /** @var UrlGeneratorInterface $urlGenerator */

        $client = static::createClient();
        
        $urlGenerator = $client->getContainer()->get("router");
        $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

        // Cette fois-ci on met un faux mot de passe pour tester la réaction du site
        $form = $crawler->filter("form[name=login]")->form([
            "email"=> "Bert@outlook.fr",
            "password"=> "abcd9"

        ]);


        $client->submit($form);
        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $client->followRedirect();

        $this->assertRouteSame('app_login');

        $this->assertSelectorTextContains(
            'div.alert-danger',
            'Invalid credentials.'
        );
    }
}
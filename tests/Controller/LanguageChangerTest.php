<?php
/**
 * Created by PhpStorm.
 * User: marvinkruger
 * Date: 2019-02-28
 * Time: 19:57
 */

namespace App\Tests\Util;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class LanguageChangerTest extends WebTestCase
{
    private $client;

    /**
     * Set language to english
     */
    protected function setUp()
    {
        $this->client = static::createClient();

        $crawler = $this->client->request('GET', '/');
        $link = $crawler
            ->filter('a:contains("Englisch")')
            ->eq(0)
            ->link()
        ;

        $this->client->click($link);
    }

    /**
     * Check if changing the language does really translate the page
     */
    public function testLanguageChanging(){

        $crawler = $this->client->request('GET', '/');

        $link = $crawler
            ->filter('a:contains("German")')
            ->eq(0)
            ->link()
        ;

        $this->client->click($link);
        $this->client->followRedirect();

        $this->assertTrue(strpos($this->client->getResponse()->getContent(), "Mein wunderschönes Lauftagebuch") !== False);
    }

}

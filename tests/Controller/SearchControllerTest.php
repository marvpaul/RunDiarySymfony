<?php
/**
 * Created by PhpStorm.
 * User: marvinkruger
 * Date: 2019-02-28
 * Time: 19:57
 */

namespace App\Tests\Util;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SearchControllerTest extends WebTestCase
{
    private $client;

    /**
     * Change language to english
     */
    protected function setUp()
    {
        $this->client = static::createClient();

        $crawler = $this->client->request('GET', '/');

        $link = $crawler
            ->filter('a:contains("Englisch")')
            ->eq(0)
            ->link();

        $this->client->click($link);
    }

    /**
     * Test if we get an valid repsonse while asking for an existing user
     */
    public function testValidResponseForExistingUser()
    {
        $crawler = $this->client->request('GET', '/');

        $form = $crawler->filter('form')->form();

        $form['form[name]'] = 'marvin';

        // submit the form and follow redirection
        $this->client->submit($form);
        $this->client->followRedirect();
        $location = $this->client->getRequest()->getUri();
        $this->assertTrue(strpos($location, "profile/marvin") !== false);
    }

}

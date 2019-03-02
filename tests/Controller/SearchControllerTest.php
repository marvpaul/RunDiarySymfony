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
        $this->client->request('GET', '/search_user');
        //TODO: Here we've to add a form which includes name field, send it in request and check for expected response
    }

}

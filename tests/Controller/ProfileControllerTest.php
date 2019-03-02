<?php
/**
 * Created by PhpStorm.
 * User: marvinkruger
 * Date: 2019-02-28
 * Time: 19:57
 */

namespace App\Tests\Util;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfileControllerTest extends WebTestCase
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
        $this->client->request('GET', '/profile/marvin');

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test if we get an valid repsonse while asking for an non existing user
     */
    public function testValidResponseForNonExistingUser()
    {
        $username = "User marvins not found";
        $this->client->request('GET', '/profile/' . $username);

        $content = $this->client->getResponse()->getContent();
        $this->assertTrue(strpos($content, "User " . $username . " not found") !== false);
    }


    /**
     * Navigate to profile and check if there is an delete option while not logged in.
     */
    public function testIfDeleteOptionIsAvailableWithoutLogin()
    {
        $this->client->request('GET', '/profile/marvin');

        $content = $this->client->getResponse()->getContent();
        $this->assertTrue(strpos($content, "Delete") === false);
        $this->assertTrue(strpos($content, "Username -> marvin") !== false);
    }

    /**
     * Creates an run entry, check if the entry was successfully entered into the profile
     * and delete the previously created entry.
     */
    public function testCreatingAndDeletingEntry()
    {
        // Login
        $crawler = $this->client->request('GET', '/login');
        $form = $crawler->filter('form')->form();
        $form['_username'] = 'marvin';
        $form['_password'] = 'sth';
        $this->client->submit($form);
        $this->client->followRedirect();
        $crawler = $this->client->followRedirect();


        $this->assertTrue(count($crawler->filter('.table-info tr')) == 3);

        # Create entry
        $form = $crawler->filter('form')->form();
        $form['form[Time][hour]'] = 1;
        $form['form[Time][minute]'] = 12;
        $form['form[Distance]'] = 12;
        $this->client->submit($form);
        $crawler = $this->client->request('GET', '/profile/marvin');


        $this->assertTrue(count($crawler->filter('.table-info tr')) == 4);

        // Delete entry
        $deleteLink = $crawler
            ->filter('.table-info tr')
            ->eq(1)
            ->filter('a:contains("Delete")')
            ->eq(0)
            ->link();
        $this->client->click($deleteLink);
        $crawler = $this->client->followRedirect();

        $this->assertTrue(count($crawler->filter('.table-info tr')) == 3);
    }

}

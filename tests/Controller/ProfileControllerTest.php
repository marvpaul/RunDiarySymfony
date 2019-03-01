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
     * Using valid login data to log into an account.
     */
    public function testLoginUsingValidData()
    {
        $crawler = $this->client->request('GET', '/login');

        $form = $crawler->filter('form')->form();

        $form['_username'] = 'marvin';
        $form['_password'] = 'sth';

        // submit the form and follow redirection
        $this->client->submit($form);
        $this->client->followRedirect();
        $this->client->followRedirect();

        $location = $this->client->getRequest()->getUri();
        $this->assertTrue(strpos($location, "profile/marvin") !== false);

        $content = $this->client->getResponse()->getContent();
        $this->assertTrue(strpos($content, "Hi marvin") !== false);

        // Check if there is an option to delete own entries
        $this->assertTrue(strpos($content, "delete-button btn btn-block btn-info") !== false);

        // Check if there is an form for submitting new entries
        $this->assertTrue(strpos($content, "Form for new entry") !== false);
    }

    /**
     * Using invalid login data to log into an account.
     */
    public function testLoginUsingInvalidData()
    {
        $crawler = $this->client->request('GET', '/login');

        $form = $crawler->filter('form')->form();

        $form['_username'] = 'marvin';
        $form['_password'] = 'sth_else';

        // submit the form and follow redirection
        $this->client->submit($form);
        $this->client->followRedirect();

        // Check if the current page is still the login page and if an error message is displayed
        $location = $this->client->getRequest()->getUri();
        $this->assertTrue(strpos($location, "login") !== false);

        $content = $this->client->getResponse()->getContent();
        $this->assertTrue(strpos($content, "No valid credentials!") !== false);
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

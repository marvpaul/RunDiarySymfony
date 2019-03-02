<?php
/**
 * Created by PhpStorm.
 * User: marvinkruger
 * Date: 2019-02-28
 * Time: 19:57
 */

namespace App\Tests\Util;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
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
}

<?php
/**
 * Created by PhpStorm.
 * User: marvinkruger
 * Date: 2019-02-28
 * Time: 19:57
 */

namespace App\Tests\Util;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class DefaultControllerTest extends WebTestCase
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
     * Test if we get an valid repsonse while asking for the page
     */
    public function testValidResponse()
    {
        $this->client->request('GET', '/');

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testValidContent()
    {
        $this->client->request('GET', '/');

        $this->assertTrue(strpos($this->client->getResponse()->getContent(), "My awesome run diary") !== False);
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

    /**
     * Using the implemented search function to search for a user with valid name
     */
    public function testSearchFunctionWithValidName(){
        $crawler = $this->client->request('GET', '/');

        $form = $crawler->filter('form')->form();

        $form['form[name]'] = 'marvin';

        // submit the form and follow redirection
        $this->client->submit($form);
        $this->client->followRedirect();

        $location = $this->client->getRequest()->getUri();
        $this->assertTrue(strpos($location, "profile/marvin") !== false);
    }

    /**
     * Using the implemented search function to search for a user with invalid name
     */
    public function testSearchFunctionWithinvalidName(){
        $crawler = $this->client->request('GET', '/');

        $form = $crawler->filter('form')->form();

        $form['form[name]'] = 'marvins';

        // submit the form and follow redirection
        $this->client->submit($form);
        $this->client->followRedirect();

        // We simply expect a redirect to start page and not to any profile
        $location = $this->client->getRequest()->getUri();
        $this->assertTrue(strpos($location, "profile") === false);
    }

    /**
     * Click on a profile and check if route has changed as expected
     */
    public function testClickingOnProfile(){
        $crawler = $this->client->request('GET', '/');

        $link = $crawler
            ->filter('a:contains("marvin")')
            ->eq(0)
            ->link()
        ;

        $this->client->click($link);
        $location = $this->client->getRequest()->getUri();
        $this->assertTrue(strpos($location, "profile/marvin") !== false);
    }

    /**
     * Simply clicking on the index page link and see if we're still on the index page
     */
    public function testClickingOnIndex(){
        $crawler = $this->client->request('GET', '/');

        $link = $crawler
            ->filter('a:contains("My awesome run diary")')
            ->eq(0)
            ->link()
        ;

        $this->client->click($link);

        // Should redirect to main page again
        $this->assertTrue(strpos($this->client->getResponse()->getContent(), "My awesome run diary") !== False);
    }


}

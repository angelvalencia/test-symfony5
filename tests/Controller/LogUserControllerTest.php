<?php 


namespace App\Tests\Controller;

use App\Controller\LogUser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LogUserControllerTest extends WebTestCase
{
    public function testShowLogUser()
    {
        $client = static::createClient();

        $client->request('GET', '/log/user/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testShowChartjs()
    {
        $client = static::createClient();

        $client->request('GET', '/chartjs');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testShowJson()
    {
        $client = static::createClient();

        $client->request('GET', '/service/log/user');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
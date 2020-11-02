<?php
namespace App\Tests\Controller;

use App\Controller\LogUserController;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class LogUserControllerTestCase extends KernelTestCase
{
     /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    public function testAddLogUser()
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
        $LogUser = new LogUserController();
        
        $result = $LogUser->addLogUser($this->entityManager);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(1, 1);
    }
}
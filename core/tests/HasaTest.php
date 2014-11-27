<?php
namespace CoreTest;

use Core;
use Data;

require_once __DIR__ . '/../Hasa.php';
require_once __DIR__ . '/../../data/DatabaseConnection.php';

class HasaTest extends \PHPUnit_Framework_TestCase
{
    protected $hasa;
    protected $databaseConnection;

    public function setUp()
    {
        $this->databaseConnection = $this->getMock('Data\DatabaseConnection');
        $this->hasa = new Core\Hasa();
    }

    public function testValidateLogin()
    {
        $this->databaseConnection->expects($this->any())->method('existUser')->will($this->returnValue(false));
        $result = $this->hasa->validateLogin(array("username"=>"Hasa", "password"=>"1234"), $this->databaseConnection);
        $this->assertEquals(false, $result);
    }

    public function testValidateHasaPass()
    {
        $this->databaseConnection->expects($this->any())->method('existUser')->will($this->returnValue(true));
        $result = $this->hasa->validateLogin(array("username"=>"Hasa", "password"=>"bomba"), $this->databaseConnection);
        $this->assertEquals(true, $result);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: user2
 * Date: 27/11/14
 * Time: 20:01
 */

namespace DataTest;

use Data;

class DatabaseConnectionTest extends \PHPUnit_Framework_TestCase {

    /** @var  Data\DatabaseConnection */
    protected $databaseConnection;

    public function setUp()
    {
        $this->databaseConnection = new Data\DatabaseConnection();
        $this->databaseConnection->clear();
    }

    public function testExistsUserReturnsCorrectResponse()
    {
        $this->databaseConnection->insertUser("hasa", "bomba");
        $this->databaseConnection->existUser("hasa", "bomba");
    }
} 
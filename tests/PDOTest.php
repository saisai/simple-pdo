<?php

namespace Previewtechs\Database\MySQL\Tests;

use Mockery\Mock;
use PHPUnit\Framework\TestCase;
use Previewtechs\Database\MySQL\PDO;

class PDOTest extends TestCase
{
    protected $db;

    public function setUp()
    {
        $this->db = \Mockery::mock(PDO::class);
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }
}

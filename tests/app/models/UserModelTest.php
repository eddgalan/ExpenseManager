<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use Tests\Support\Database\Seeds\UserSeeder;

class UserModelTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    protected $seed = UserSeeder::class;
    protected $seedOnce = false;
    /** @var UserModel $userModel */
    private $userModel;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userModel = new UserModel();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Validates that a new user is inserted into the database
     * @return void
     */
    public function testInsertNewUser() : void
    {
        $userObject = $this->userModel->findAll();
        $this->assertCount(3, $userObject);
    }

    /**
     * Validates that a user is deleted
     * @return void
     */
    public function testDeleteUser()
    {
        $userObject = $this->userModel->first();
        $this->userModel->delete($userObject->id);
        $this->assertEquals(1, $userObject->id);
        // The model should no longer find it
        $this->assertNull($this->userModel->find($userObject->id));
        // ... but it should still be in the database
        $result = $this->userModel->builder()->where('id', $userObject->id)->get()->getResult();
    }
}

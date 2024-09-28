<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use App\Entities\UserEntity;

class UserEntityTest extends CIUnitTestCase
{
    /** @var UserEntity */
    private $userEntity;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userEntity = new UserEntity();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Test that the password is correct
     * @return void
     */
    public function testUserAuthenticationWhenPasswordIsCorrect() : void
    {
        $this->userEntity->password = '$2y$10$XKETayejIyOaUp8jak1M2e8TcyIqftj/PwgZnryx7ZMGBMetIojqm';
        $password = '12345678a';
        $this->assertTrue($this->userEntity->authenticate($password));
    }

    /**
     * Test the password is incorrect
     * @return void
     */
    public function testUserAuthenticationWhenPasswordIsIncorrect() : void
    {
        $this->userEntity->password = '$2y$10$XKETayejIyOaUp8jak1M2e8TcyIqftj/PwgZnryx7ZMGBMetIojqm';
        $password = '123568a__';
        $this->assertFalse($this->userEntity->authenticate($password));
    }

}

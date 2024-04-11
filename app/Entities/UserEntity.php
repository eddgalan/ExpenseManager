<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UserEntity extends Entity
{
    /**
     * @return bool
     */
    public function authenticate($password)
    {
        return password_verify($password, $this->attributes['password']);
    }
}

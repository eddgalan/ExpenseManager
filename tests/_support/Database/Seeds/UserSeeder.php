<?php

namespace Tests\Support\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'firstname' => 'Juan',
                'lastname'  => 'Perez',
                'username'  => 'jperez',
                'email'     => 'jperez@correo.com',
                'password'  => '$2y$10$XKETayejIyOaUp8jak1M2e8TcyIqftj/PwgZnryx7ZMGBMetIojqm',
            ],
            [
                'firstname' => 'Karla',
                'lastname'  => 'García',
                'username'  => 'kgarcia',
                'email'     => 'kgarcia@correo.com',
                'password'  => '$2y$10$XKETayejIyOaUp8jak1M2e8TcyIqftj/PwgZnryx7ZMGBMetIojqm',
            ],
            [
                'firstname' => 'Luis',
                'lastname'  => 'Juárez',
                'username'  => 'ljuarez',
                'email'     => 'ljuarez@correo.com',
                'password'  => '$2y$10$XKETayejIyOaUp8jak1M2e8TcyIqftj/PwgZnryx7ZMGBMetIojqm',
            ],
        ];
        $builder = $this->db->table('users');
        foreach ($users as $user) {
            $builder->insert($user);
        }
    }
}

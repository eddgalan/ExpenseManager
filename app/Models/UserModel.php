<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = [
        'username',
        'firstname',
        'lastname',
        'email',
        'password',
        'created_at',
        'updated_at',
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        //'username' => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
        'firstname' => 'required|min_length[1]|max_length[150]',
        'lastname' => 'required|min_length[1]|max_length[150]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]|max_length[255]',
    ];
    protected $validationMessages = [
        'username' => [
            'is_unique' => 'El nombre de usuario insertado ya está en uso.'
        ],
        'email' => [
            'is_unique' => 'El correo electrónico ya está siendo utilizado.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

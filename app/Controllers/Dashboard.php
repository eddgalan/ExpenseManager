<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        $session = session();
        echo "Welcome {$session->get('user')['username']}";
    }

}

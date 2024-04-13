<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Helpers\SessionHelper;

class Dashboard extends BaseController
{
    /**
     * @var SessionHelper
     */
    private $sessionHelper;

    public function __construct()
    {
        $this->sessionHelper = new SessionHelper();
    }

    /**
     * Show dashboard index page
     * 
     */
    public function index()
    {
        if (!$this->sessionHelper->isLoggedIn()) {
            return redirect()->to(route_to('loginForm'));
        }
        echo "Welcome {$this->sessionHelper->getUserFullname()}";
    }

}

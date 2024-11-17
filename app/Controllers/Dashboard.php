<?php

namespace App\Controllers;

use App\Helpers\SessionManager;
use CodeIgniter\HTTP\RedirectResponse;

class Dashboard extends BaseController
{
    /**
     * @var SessionManager
     */
    private SessionManager $sessionHelper;

    public function __construct()
    {
        $this->sessionHelper = new SessionManager();
    }

    /**
     * Show dashboard index page
     * 
     */
    public function index(): string|RedirectResponse
    {
        if (!$this->sessionHelper->isLoggedIn()) {
            return redirect()->to(route_to('loginForm'));
        }

        return view(
            'web/frontend/dashboard/index',
            ['managerSession' => $this->sessionHelper]
        );
    }
}

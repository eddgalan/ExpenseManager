<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Dashboard extends BaseController
{
    /**
     * Show dashboard index page
     * 
     */
    public function index(): string|RedirectResponse
    {
        return view(
            'web/frontend/dashboard/index',
            ['managerSession' => $this->sessionManager]
        );
    }
}

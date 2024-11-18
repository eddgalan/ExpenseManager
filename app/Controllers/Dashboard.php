<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    /**
     * Show dashboard index page
     * 
     */
    public function index(): string
    {
        return view(
            'web/frontend/dashboard/index',
            [
                'firstname' => $this->sessionManager->getFirstName(),
            ]
        );
    }
}

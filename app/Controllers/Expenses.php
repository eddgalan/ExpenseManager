<?php

namespace App\Controllers;

class Expenses extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        return view('web/frontend/expenses/index',);
    }
}

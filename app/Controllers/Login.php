<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RedirectResponse;
use App\Models\UserModel;
use App\Helpers\SessionHelper;

class Login extends Controller
{
    private $userModel;
    private $sessionHelper;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->sessionHelper = new SessionHelper();
    }

    /**
     * Show login form
     * 
     * @return string
     */
    public function index()
    {
        return $this->sessionHelper->isLoggedIn() ? redirect()->to(route_to('dashboard')) : view('web/login');
    }

    /**
     * Authenticate user and set session
     * 
     * @return RedirectResponse
     */
    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $userResult = $this->userModel->where('username', $username)->orWhere('email', $username)->findAll(1);
        if (count($userResult) === 0) {
            return redirect()->to(route_to('loginForm'))->with('errors', 'Username/password incorrect.');
        }
        $user = $userResult[0];
        $isUserAuth = $user->authenticate($password);
        if (!$isUserAuth) {
            return redirect()->to(route_to('loginForm'))->with('errors', 'Username/password incorrect.');
        }
        $userData = [
            'id' => $user->id,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'username' => $user->username,
            'email' => $user->email,
        ];
        $this->sessionHelper->setUserSession($userData);
        return redirect()->to(route_to('dashboard'));
    }

    /**
     * Close user session
     *
     * @return RedirectResponse
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    /**
     * Show register form
     * 
     * @return string
     */
    public function registerCreate()
    {
        return $this->sessionHelper->isLoggedIn() ? redirect()->to(route_to('dashboard')) : view('web/register');
    }

    /**
     * Create user
     * 
     * @return RedirectResponse
     */
    public function registerStore()
    {
        if (!$this->validate($this->userModel->validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        /** ToDo: Make some function to validate that the username is not repeated */
        /** ToDo: Use UserEntity to create user */
        $username = strtolower($firstname[0].$lastname);
        $userData = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        try {
            $this->userModel->insert($userData);
            return redirect()->to(route_to('loginForm'))->with('success', 'User created.');
        } catch (\Exception $e) {
            return redirect()->to(route_to('registerCreate'))->with('errors', "Error creating user: {$e->getMessage()}");
        }
    }

}
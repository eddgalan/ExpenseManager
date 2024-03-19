<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('web/login');
    }

    public function authenticate()
    {
        // Lógica para autenticar al usuario
        // password_verify($inputPassword, $storedHashedPassword)
        // Si el usuario se autentica correctamente, redirigir a una página de inicio
        // Si falla, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
    }

    public function registerForm()
    {
        return view('web/register');
    }

    public function registerCreate()
    {
        if (!$this->validate($this->userModel->validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        /** TODO: Make some function to validate that the username is not repeated */
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
            return redirect()->to('login')->with('success', 'User created');
        } catch (\Exception $e) {
            return redirect()->to('register')->with('errors', "Error creating user: {$e->getMessage()}");
        }
        
    }

}

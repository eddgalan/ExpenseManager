<?php

namespace App\Helpers;

use \Config\Services;

class SessionHelper
{
    /**
     * @var CodeIgniter\Session\Session
     */
    private $session;

    /**
     * @var array
     */
    private $userData;

    public function __construct(){
        $this->session = Services::session();
        $this->userData = $this->session->has('userSession') ? $this->session->get('userSession') : null;
    }

    /**
     * Validate if the user is login
     * 
     * @return bool
     */
    public function isLoggedIn() {
        return $this->userData !== null;
    }

    /**
     * Set user session
     * 
     * @return void
     */
    public function setUserSession($userData) {
        $this->session->set(['userSession' => $userData]);
    }

    /**
     * Return firstname and lastname concatenation
     * 
     * @return string
     */
    public function getUserFullname() {
        return "{$this->userData['firstname']}";
    }

}

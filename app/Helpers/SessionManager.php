<?php

namespace App\Helpers;

use \Config\Services;
use \CodeIgniter\Session\Session;

class SessionManager
{
    /**
     * @var Session
     */
    private Session $session;

    /**
     * @var array
     */
    private array $userData;

    public function __construct() {
        $this->session = Services::session();
        $this->userData = $this->session->has('userSession') ? $this->session->get('userSession') : [];
    }

    /**
     * Validate if the user is login
     *
     * @return bool
     */
    public function isLoggedIn(): bool {
        return count($this->userData) > 0;
    }

    /**
     * Set user session
     *
     * @param $userData
     * @return void
     */
    public function setUserSession($userData): void {
        $this->session->set(['userSession' => $userData]);
    }

    /**
     * Return all user session data
     *
     * @return array
     */
    private function getUserSessionData(): array {
        return $this->userData;
    }

    /**
     * Return username
     *
     * @return string
     */
    public function getUsername(): string {
        return $this->userData['username'];
    }

    /**
     * Return user firstname
     *
     * @return string
     */
    public function getFirstName(): string {
        return $this->userData['firstname'];
    }

    /**
     * Return user lastname
     *
     * @return string
     */
    public function getLastName(): string {
        return $this->userData['lastName'];
    }

    /**
     * Return user fullname (concat firstname + lastname)
     *
     * @return string
     */
    public function getFullName(): string {
        return "{$this->getFirstName()} {$this->getLastName()}";
    }

    /**
     * Return user email
     *
     * @return string
     */
    public function getEmail(): string {
        return $this->userData['email'];
    }
}

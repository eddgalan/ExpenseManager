<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RedirectResponse;
use App\Services\SessionManager;

/**
 * This filter is used to validate user session in "frontend"
 */
class AuthFilter implements FilterInterface
{
    /**
     * @var SessionManager
     */
    protected SessionManager $sessionManager;

    public function __construct()
    {
        $this->sessionManager = new SessionManager();
    }

    /**
     * Validate User session
     *
     * @param RequestInterface $request
     * @param $arguments
     * @return RedirectResponse|ResponseInterface|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!$this->sessionManager->isLoggedIn()) {
            return redirect()->to(route_to('loginForm'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}

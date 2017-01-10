<?php

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller
{
    public function home()
    {
        $this->show('user/home');
    }

    public function login()
    {
        $this->show('user/login');
    }

    public function logout()
    {
        $this->show('user/logout');
    }

    public function inscription()
    {
        $this->show('user/inscription');
    }
}
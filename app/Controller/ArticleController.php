<?php

namespace Controller;

use \W\Controller\Controller;

class ArticleController extends Controller
{
    public function home()
    {
        $this -> show('article/home');
    }

    public function ecrire()
    {
        $this -> show('article/ecrire');
    }

}

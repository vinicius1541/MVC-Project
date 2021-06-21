<?php
namespace App\Controller;

class Controller404 {
    public function __construct() {
        require_once(DIRREQ . 'app/View/404/404.html');
    }
}
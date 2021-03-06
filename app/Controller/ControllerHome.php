<?php
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView {
    public function __construct() {
        $this->setTitle("Home page");
        $this->setKeyword("mvc project, vinicius1541, github");
        $this->setDir("Home");
        $this->renderLayout();
    }
}

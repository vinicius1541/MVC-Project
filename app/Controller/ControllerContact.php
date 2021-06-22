<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerContact extends ClassRender implements InterfaceView {
    public function __construct() {
        $this->setTitle("Contact page");
        $this->setKeyword("mvc project, vinicius1541, github");
        $this->setDir("Contact");
        $this->renderLayout();
    }
}

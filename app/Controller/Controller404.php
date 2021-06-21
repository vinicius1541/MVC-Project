<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class Controller404 extends ClassRender implements InterfaceView {
    public function __construct() {
        $this->setTitle("404 - Not Found");
        $this->setKeyword("mvc project, vinicius1541, github");
        $this->setCustomHead(false);
        $this->setCustomHeader(false);
        $this->setCustomFooter(false);
        $this->setDir("404");
        $this->renderLayout();
    }
}
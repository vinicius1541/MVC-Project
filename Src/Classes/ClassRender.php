<?php
namespace Src\Classes;

class ClassRender {
    # Propriedades
    private $dir;
    private $title;
    private $keyword;
    private $customHead;
    private $customHeader;
    private $customFooter;
    # Getter and Setter
    public function getDir() { return $this->dir; }
    public function setDir($dir) { $this->dir = $dir; }
    public function getTitle() { return $this->title; }
    public function setTitle($title) { $this->title = $title; }
    public function getKeyword() { return $this->keyword; }
    public function setKeyword($keyword) { $this->keyword = $keyword; }
    public function setCustomHead($customHead = false) { $this->customHead = $customHead; }
    public function setCustomHeader($customHeader = false) { $this->customHeader = $customHeader; }
    public function setCustomFooter($customFooter = false) { $this->customFooter = $customFooter; }


    /**
     * Método responsável por renderizar todos os layouts da View
     **/
    public function renderLayout() {
        include_once(DIRREQ . "app/View/Layout.php");
    }

    /**
     * Método que vai incluir o head
     **/
    public function addHead() {
        if($this->customHead) {
            if(file_exists(DIRREQ . "app/View/{$this->getDir()}/Head.php")) {
                include(DIRREQ . "app/View/{$this->getDir()}/Head.php");
            }
        } else {
            if(file_exists(DIRREQ . "app/View/Head.php")) {
                include(DIRREQ . "app/View/Head.php");
            }
        }
    }
    /**
     * Método que vai incluir o header principal
    **/
    public function addHeader() {
        if($this->customHeader) {
            if(file_exists(DIRREQ . "app/View/{$this->getDir()}/Header.php")) {
                include(DIRREQ . "app/View/{$this->getDir()}/Header.php");
            }
        } else {
            if(file_exists(DIRREQ . "app/View/Header.php")) {
                include(DIRREQ . "app/View/Header.php");
            }
        }
    }
    /**
     * Método que vai incluir o main
     **/
    public function addMain() {
        if(file_exists(DIRREQ . "app/View/{$this->getDir()}/Main.php")) {
            include(DIRREQ . "app/View/{$this->getDir()}/Main.php");
        }
    }
    /**
     * Método que vai incluir o footer
     **/
    public function addFooter() {
        if($this->customFooter) {
            if(file_exists(DIRREQ . "app/View/{$this->getDir()}/Footer.php")) {
                include(DIRREQ . "app/View/{$this->getDir()}/Footer.php");
            }
        } else {
            if(file_exists(DIRREQ . "app/View/Footer.php")) {
                include(DIRREQ . "app/View/Footer.php");
            }
        }
    }
}

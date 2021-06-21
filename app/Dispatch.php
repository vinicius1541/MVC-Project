<?php

namespace App;
use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes {
    # Atributos
    private $method;
    private $param = [];
    private $object;

    protected function getMethod() { return $this->method;}
    public function setMethod($method) {$this->method = $method;}
    public function getParam() { return $this->param;}
    public function setParam($param) { $this->param = $param;}

    # Construtor
    public function __construct() {
        self::addController();
    }

    /**
     * Método que adiciona a Controller
    **/
    private function addController() {
        $controllerRoute = $this->getRoute(); # retornaria, por exemplo: "ControllerLogin"
        $namespace = "App\\Controller\\{$controllerRoute}";
        $this->object = new $namespace; # object = new App\Controller\ControllerHome;
        if(isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }
    /**
     * Método que adiciona o método da Controller
     **/
    private function addMethod() {
        # method_exists(object, method_name) verifica se algum metodo existe dentro da classe do objeto
        if(method_exists($this->object, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->object, $this->getMethod()], $this->getParam()); // chama um array de parametros
        }
    }
    /**
     * Método que adiciona os parâmetros da Controller
     **/
    private function addParam() {
        $arrayCount = count($this->parseUrl()); # conta quantos elementor tem no array url;
        if($arrayCount > 2) {
            foreach($this->parseUrl() as $key => $value) { # percorre todos os elementos do array
                if($key > 1) {
                    $this->setParam($this->param += [$key => $value]);
                }
            }
        }
    }

}

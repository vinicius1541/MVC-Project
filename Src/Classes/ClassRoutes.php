<?php
namespace Src\Classes;
use Src\Traits\TraitUrlParser;

class ClassRoutes {
    use TraitUrlParser;
    private $route;

    # Método de retorno da rota
    public function getRoute() {
        $url = $this->parseUrl();
        $index = $url[0];

        $this->route = array(
            "" => "ControllerHome", # redirect para ControllerHome se a url for vazia
            "home" => "ControllerHome",
            "login" => "ControllerLogin",
            "contact" => "ControllerContact",
        );
        if(array_key_exists($index, $this->route)) { # se existir o caminho digitado dentro das rotas do array
            if(file_exists(DIRREQ."app/controller/{$this->route[$index]}.php")) { # se o arquivo do caminho existir
                return $this->route[$index];
            } else {
                return "ControllerHome";
            }
        } else {
            return "Controller404";
        }
    }
}
<?php
namespace Src\Classes;
use Src\Traits\TraitUrlParser;

class ClassBreadcrumb {
    use TraitUrlParser;

    public function addBreadcrumb() {
        $contador = count($this->parseUrl()); //contando quantas barras o usuário colocou na url
        $arrayLink[0] = '';
        echo "<a class='teste' href='" . DIRPAGE . "'>home</a>";
        if($this->parseUrl()[0] != "") { // retirando o ">" se estiver dentro da primeira pagina,
            echo " > ";                  // já que $contador conta no array uma string vazia
        }
        for($i = 0; $i < $contador; $i++) {
            $arrayLink[0] .= $this->parseUrl()[$i].'/';
            echo "<a href='" . DIRPAGE . $arrayLink[0]. "'>{$this->parseUrl()[$i]}</a>";
            if($i < $contador - 1 && $this->parseUrl()[$i+1] != "") {
                # Entra aqui apenas SE $i for menor que o $contador-1 (array começa em zero e $contador contém
                # a qtd total, se for 4, então é de 0-3)
                # &&
                # o ultimo link for "" (quando o link
                # termina com "/" no final, conta como vazio no array)
                echo " > ";
            }
        }


    }
}

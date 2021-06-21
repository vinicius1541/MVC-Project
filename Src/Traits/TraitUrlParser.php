<?php
namespace Src\Traits;

trait TraitUrlParser {
    #Divide a url em um Array
    public function parseUrl() {
        # explode() transforma em Array
        # rtrim() retira os espaços vazios
        # a 'url' é a mesma delimitada no .htaccess
        # Essa função evita que
        return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);

    }
}
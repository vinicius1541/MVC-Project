<?php
#Arquivos diretórios raízes
$pastaInterna = ""; //se não estiver no diretório raíz
#caminho absoluto do site, exemplo: https://localhost/
define('DIRPAGE', "https://{$_SERVER['HTTP_HOST']}/$pastaInterna");
#caminho absoluto fisico, exemplo: C:\xampp\htdocs\
if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') { //se a última letra do servidor for igual a uma barra "/"
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}

#Diretórios específicos

#IMAGEM
const DIRIMG = DIRPAGE . "public/img/";

#CSS
const DIRCSS = DIRPAGE . "public/css/";

#JS
const DIRJS = DIRPAGE . "public/js/";

#ACESSO BANCO DE DADOS
const HOST = "localhost";
const DB = "odonto_project";
const USER ="root";
const PASS = "12345";


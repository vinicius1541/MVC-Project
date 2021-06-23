<?php
namespace App\Controller;

use App\Model\ClassContact;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerContact extends ClassContact {
    # Atributos
    protected $name;
    protected $email;
    protected $phone;
    protected $message;

    public function __construct() {
        $render = new ClassRender();
        $render->setTitle("Contact page");
        $render->setKeyword("mvc project, vinicius1541, github");
        $render->setDir("Contact");
        $render->renderLayout();
    }

    /**
     * Esse método recupera as variaveis do formulario de contato
     * e filtra elas para impedir ataques como SQL Injection ou XSS
    **/
    public function recVariables() {
        if(isset($_POST['name']))    {$this->name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);}
        if(isset($_POST['email']))   {$this->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);}
        if(isset($_POST['phone']))   {$this->phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);}
        if(isset($_POST['message'])) {$this->message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);}
    }

    public function saveMessage() {
        $this->recVariables(); # recebendo variáveis e tratando elas com o filtro de caracteres especiais
        $response = parent::addContact($this->name, $this->email, $this->phone, $this->message);
        if($response == true) {
            echo "<div class='center-message'><div class='green message'>Mensagem enviada com sucesso!</div></div>";
        } else {
            echo "<div class='center-message'><div class='red message'>Erro ao tentar enviar :( </div></div>";
        }
    }
}

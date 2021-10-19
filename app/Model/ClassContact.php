<?php

namespace App\Model;

use App\Model\ClassConnection;

class ClassContact extends ClassConnection {
    private $database;
    /**
     * Cadastrá a mensagem de um usuário no sistema
     **/
    protected function addContact($name, $email, $phone, $message) {
        $id_contact = 0;
        $this->database = $this->connectDB()->prepare("INSERT INTO contact VALUES(:id_contact, :name, :email, :phone, :message)");
        $this->database->bindParam(":id_contact",$id_contact, \PDO::PARAM_INT);
        $this->database->bindParam(":name",$name, \PDO::PARAM_STR);
        $this->database->bindParam(":email",$email, \PDO::PARAM_STR);
        $this->database->bindParam(":phone",$phone, \PDO::PARAM_STR);
        $this->database->bindParam(":message",$message, \PDO::PARAM_STR);

        return $this->database->execute();
    }
}

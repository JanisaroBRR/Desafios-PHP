<?php

namespace Model;

use Model\Connection;

use PDO;
use PDOException;


class User{
    private $db;
    /*
    * MÉTODO QUE IRPA SER EXECUTADO TODA VEZ QUE
    * FOR CRIADO UM OBJETO DA CLASS -> USER
    */
    public function __construct()
    {
        //FAZENDO A CONEXÃO COM O BANCO DE DADOS
        $this->db = Connection::getInstance();
    }
        // FUNÇÃO DE CRIAR USUÁRIO
    public function registerUser($user_fullname, $email, $password){
        try{
            //INSERÇÃO DE DADOS NA LINGUAGEM SQL
            $sql = 'INSERT INTO users(user_fullname, email, password, created_at) VALUES (:user_fullname, :email, :password)';
            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            //PREPARAR O BANCO DE DADOS PARA RECEBER O COMANDO ACIMA
            $conn =$this->db->prepare($sql);
            
            //REFERENCIAR OS DADOS PASSADOS PELO COMANDO SQL COM OS PARÂMETROS DA FUNÇÃO
            $conn->bindParam(":user_fullname", $user_fullname, PDO::PARAM_STR);
            $conn->bindParam(":email", $email, PDO::PARAM_STR);
            $conn->bindParam(":password", $hashedPassword, PDO::PARAM_STR);
            
            //EXECUTAR TUDO
        }catch (PDOException $error){
            //EXIBIR MENSAGEM DE ERRO COMPLETA E PARAR A EXECUÇÃO
            echo "Erro ao executar o comando: ", $error->getMessage();
            return false;
        }
    }

    public function getUserEmail($email) {
        try {

        }catch (PDOException $error){}
    }
    public function getUserInfo($user_fullname, $email) {
        try {

        }catch (PDOException $error){

        }
    }


}
?>
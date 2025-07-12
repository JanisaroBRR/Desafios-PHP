<?php

namespace Controller;

use Model\User;
use Exception;

class UserController {



    public function __construct() {
        $this->userModel = new User();
    }





    public function registerUser($user_fullname, $email, $password) {
        try {
            if(empty($user_fullname) or empty($email) or empty($password)) {
                return false;
            }         


            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            return $this->userModel->registerUser($user_fullname, $email,$hashedPassword);
        }catch (Exception $error) {
            echo "Erro ao cadastrar usuário: " . $error->getMessage();
            return false;
        }
    }
    //Registro de USUÁRIO
    if($user) {
        if(crypt($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $SESSION['user_fullname'] = $user['user_fullname']
            $SESSION['email'] = $user['email'];

            return true;
        }else {
            return false;
        }
    }

    // LOGIN DE USUÁRIO

    //USUÁRIO LOGADO?

    //RESGATAR DADOS DO USUÁRIO

}
?>
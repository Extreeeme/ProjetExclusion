<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController {

    public function login(){
        $errors = false;
        
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['user_password'])){
                $_SESSION['connect'] = "<a href='index.php?p=users.disconnect'>Deconnexion</a>";
                $this->render("posts.index");
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors', 'connect'));
    }


    public function disconnect()
    {
        if(isset($_SESSION["auth"])){
            header('location: index.php?p=users.disconnect');
        }
        session_destroy();
        session_start();
        $_SESSION['connect'] = "<a href='index.php?p=users.login'>Connexion</a>";
        $this->render("posts.index");
        exit();
    }
}

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
            if($auth->login($_POST['pseudo'], $_POST['password'])){
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }
     
    public function register()
    {
        $errors = false;
        $this->template = "default";
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if (isset($_POST['pseudo'], $_POST['password'], $_POST['birthdate'], $_POST['mail']) && $_POST['password'] != '' && $_POST['mail'] != '') {
                 if($auth->register($_POST['pseudo'], $_POST['password'], $_POST['birthdate'], $_POST['mail'])){
                   header("Location: index.php");
                   exit();
                }else{
                    $errors = true;
                }
            }else{
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('connects.register', compact('form', 'errors'));
    }


    public function disconnect()
    {
        session_destroy();
        header("Location: index.php");
        exit();
    }
}




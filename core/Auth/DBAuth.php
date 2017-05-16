<?php
namespace Core\Auth;

use Core\Database\Database;

class DBAuth {

    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $pseudo
     * @param $password
     * @return boolean
     */
    public function login($pseudo, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE pseudo = ?', [$pseudo], null, true);
        if($user){
            if($user->password === sha1($password)){
                $user->rights == 1 ? $_SESSION['auth'] = "admin" : $_SESSION['auth'] = "user";
                $_SESSION["user"] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

public function register($username, $password, $birthday, $mail){
        $user = $this->db->prepare('SELECT * FROM users WHERE pseudo = ? OR mail = ?', [$username, $mail], null, true);
        if(!$user){
                $password = sha1($password);
                $this->db->prepare("INSERT INTO users
                                    SET pseudo = ?, password = ?, mail = ?",
                                    [$username, $password, $mail]);
                $id = $this->db->lastInsertId();
                $this->db->prepare("INSERT INTO profilpictures
                                    SET src = ?, users_id = ?",
                                    ['http://www.snut.fr/wp-content/uploads/2015/06/image-de-profil-2.jpg', $id]);
                return true;
            }
        }
     
    }


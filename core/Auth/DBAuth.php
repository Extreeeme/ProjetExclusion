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
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $user_password ){
        $user = $this->db->prepare('SELECT * FROM users WHERE pseudo = ?', [$username], null, true);
        if($user){
            if($user->password === sha1($user_password)){
                $user->rights == 1 ? $_SESSION['auth'] = "admin" : $_SESSION['auth'] = "username";
                $_SESSION["user"] = $user->id;
                $_SESSION['connect'] = "<a href='index.php?p=users.disconnect'>Deconnexion</a>";
                return true;
            }
        }
        return false;
    }
    public function logged(){
        return isset($_SESSION['auth']);
    }
    public function logout()
    {
        if ($this->logged()){
            unset($_SESSION['auth']);
            $_SESSION['connect'] = "<a href='index.php?p=users.login'>Connexion</a>";
            return true;
        }
        return false;
    }

}

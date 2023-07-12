<?php
/**
 * Created by PhpStorm.
 * User: JoanaPedrosa
 * Date: 11/07/2023
 * Time: 12:09
 */
class Auth
{
    public function __construct(){
        if(!isset($_SESSION)) {
            session_start();
        }
    }

    public function checkAuth($username, $password){
        $user_found = User::find_by_username_and_password($username, $password);

        if($user_found != null) {
            
            $_SESSION['id'] = $user_found->id;
            $_SESSION['username'] = $user_found->username;
            $_SESSION['role'] = $user_found->role;

            return true;
        }

        else {
            return false;
        }
    }

    public function isLoggedIn(){
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION["username"])) {
            return true;
        } else {
            header('Location: index.php?' . INVALID_ACCESS_ROUTE);
        }
    }

    public function logout(){
        session_destroy();
    }

    public function getId() {
        return $_SESSION['id'];
    }

    public function getUsername() {
        return $_SESSION['username'];
    }

    public function getRole() {
        return $_SESSION['role'];
    }

    public function isLoggedInAs($rolesPermitidos = [])
    {
        if ($this->isLoggedIn()) {
            $role = $this->getRole();
            return in_array($role, $rolesPermitidos);
        }
    }

}

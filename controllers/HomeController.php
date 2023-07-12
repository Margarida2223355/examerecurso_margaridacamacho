<?php
/**
 * Created by PhpStorm.
 * User: JoanaPedrosa
 * Date: 11/07/2023
 * Time: 12:09
 */

require_once 'Controller.php';
require_once './models/Auth.php';

class HomeController extends Controller
{
    public function index(){
        $this -> renderView('home', 'index');
    }

    public function home() {
        $auth = new Auth();
        $user_id = $auth -> getId();
        $this -> renderView('home', 'home', ['user_id' => $user_id]);
    }

    public function login() {
        $user = $_POST['fuser'];
        $pass = $_POST['fpass'];

        $auth = new Auth();

        if($auth -> checkAuth($user, $pass)) {
            $this -> redirectToRoute('home', 'home');
        }

        else {
            $this -> renderView('home', 'index');
        }
    }

    public function logout() {
        $auth = new Auth();
        $auth -> logout();

        $this -> renderView('home', 'index');
    }

    public function search() {
        $this -> renderView('home', 'search');
    }
}
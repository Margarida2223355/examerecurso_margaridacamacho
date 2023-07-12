<?php
    require_once './controllers/Controller.php';
    
    class UserController extends Controller {

        //Apenas o administrador tem acesso
        public function __construct() {
            $this -> authorizationFilter(['Admin']);
        }

        public function index() {
            $users = User::all();
            $this -> renderView('user', 'index', ['users' => $users]);
        }

        public function show($id) {
            $user = User::find($id);
            $this -> renderView('user', 'show', ['user' => $user]);
        }

        public function create() {
            $this -> renderView('user', 'create');
        }

        public function store() {

            $user = new User($this -> getHTTPPost());

            if($user -> is_valid()) {
                $user -> save();
                
                $this -> renderView('home', 'home');
            }
            else {
                $this -> renderView('user', 'create', ['user' => $user]);
            }
        }

        public function edit($id) {
            $user = User::find_by_id($id);

            if(is_null($user)) {
                $this -> redirectToRoute('home', 'home');
            }
            else {
                $this -> renderView('user', 'edit', ['user' => $user]);
            }
            
        }

        public function update($id) {
            $user = User::find_by_id($id);

            $user -> update_attributes($this -> getHTTPPost());

            if($user -> is_valid()) {
                $user -> save();
                $this -> renderView('home', 'home');
            }

            else {
                $this -> renderView('user', 'edit',['user' => $user]);
            }
        }

        public function delete($id) {
            $user = User::find($id);

            $user -> delete();

            $this -> redirectToRoute('user', 'index');

        }
    }
?>
<?php
    require_once './controllers/Controller.php';
    
    class LojaController extends Controller {

        //Apenas o administrador tem acesso
        public function __construct() {
            $this -> authorizationFilter(['Admin']);
        }

        public function index() {
            $lojas = Loja::all();
            $this -> renderView('loja', 'index', ['lojas' => $lojas]);
        }

        public function show($id) {
            $loja = Loja::find($id);
            $this -> renderView('loja', 'show', ['loja' => $loja]);
        }

        public function create() {
            $this -> renderView('loja', 'create');
        }

        public function store() {

            $loja = new Loja($this -> getHTTPPost());

            if($loja -> is_valid()) {
                $loja -> save();
                
                $this -> renderView('home', 'home');
            }
            else {
                $this -> renderView('loja', 'create', ['loja' => $loja]);
            }
        }

        public function edit($id) {
            $loja = Loja::find_by_id($id);

            if(is_null($loja)) {
                $this -> redirectToRoute('home', 'home');
            }
            else {
                $this -> renderView('loja', 'edit', ['loja' => $loja]);
            }
            
        }

        public function update($id) {
            $loja = Loja::find_by_id($id);

            $loja -> update_attributes($this -> getHTTPPost());

            if($loja -> is_valid()) {
                $loja -> save();
                $this -> renderView('home', 'home');
            }

            else {
                $this -> renderView('loja', 'edit',['loja' => $loja]);
            }
        }

        public function delete($id) {
            $loja = Loja::find($id);

            $loja -> delete();

            $this -> redirectToRoute('loja', 'index');

        }
    }
?>
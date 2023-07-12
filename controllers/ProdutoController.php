<?php
    require_once './controllers/Controller.php';
    
    class ProdutoController extends Controller {

        //Apenas o administrador tem acesso
        public function __construct() {
            $this -> authorizationFilter(['Admin']);
        }

        public function index() {
            $produtos = Produto::all();
            $this -> renderView('produto', 'index', ['produtos' => $produtos]);
        }

        public function show($id) {
            $produto = Produto::find($id);
            $this -> renderView('produto', 'show', ['produto' => $produto]);
        }

        public function create() {
            $this -> renderView('produto', 'create');
        }

        public function store() {

            $produto = new Produto($this -> getHTTPPost());

            if($produto -> is_valid()) {
                $produto -> save();
                
                $this -> renderView('home', 'home');
            }
            else {
                $this -> renderView('produto', 'create', ['produto' => $produto]);
            }
        }

        public function edit($id) {
            $produto = Produto::find_by_id($id);

            if(is_null($produto)) {
                $this -> redirectToRoute('home', 'home');
            }
            else {
                $this -> renderView('produto', 'edit', ['produto' => $produto]);
            }
            
        }

        public function update($id) {
            $produto = Produto::find_by_id($id);

            $produto -> update_attributes($this -> getHTTPPost());

            if($produto -> is_valid()) {
                $produto -> save();
                $this -> renderView('home', 'home');
            }

            else {
                $this -> renderView('produto', 'edit',['produto' => $produto]);
            }
        }

        public function delete($id) {
            $produto = Produto::find($id);

            $produto -> delete();

            $this -> redirectToRoute('produto', 'index');

        }
    }
?>
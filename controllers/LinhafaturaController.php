<?php
    require_once './controllers/Controller.php';
    
    class LinhafaturaController extends Controller {

        //Apenas o administrador tem acesso
        public function __construct() {
            $this -> authorizationFilter(['Admin','Funcionario']);
        }

        public function index($fatura_id) {
            $fatura = Fatura::find($fatura_id);

            if(!empty($fatura -> linhafaturas)) {
                $this -> renderView('linhafatura', 'index', ['fatura' => $fatura]);
            }
            else {
                $this -> redirectToRoute('linhafatura', 'create', ['fatura_id' => $fatura_id]);
            }
        }

        public function create($fatura_id) {
            $fatura = Fatura::find($fatura_id);
            $produtos = Produto::all();

            $this -> renderView('linhafatura', 'create', ['fatura' => $fatura, 'produtos' => $produtos]);
        }

        public function store() {
            $linhafatura = new Linhafatura($this -> getHTTPPost());
            $linhafatura -> subtotal = ($linhafatura -> quantidade) * ($linhafatura -> produto -> precounitario);
            
            if($linhafatura -> is_valid()) {
                $linhafatura -> save();
                $linhafatura -> fatura -> atualizar_total();
                
                $this -> redirectToRoute('linhafatura', 'index', ['fatura_id' => $linhafatura -> fatura -> id]);
            }
            else {
                $this -> renderView('linhafatura', 'create', ['linhafatura' => $linhafatura]);
            }
        }

        public function edit($id) {
            $linhafatura = Linhafatura::find($id);

            $this-> renderView('linhafatura', 'edit', ['linhafatura' => $linhafatura]);

        }

        public function update($id) {
            $linhafatura = Linhafatura::find($id);

            $linhafatura -> update_attributes($this -> getHTTPPost());

            if($linhafatura -> is_valid()) {
                $linhafatura -> save();
                $this -> redirectToRoute('linhafatura', 'index', ['fatura_id' => $linhafatura -> fatura -> id]);
            }

            else {
                $this -> renderView('linhafatura', 'edit',['linhafatura' => $linhafatura]);
            }
        }

        public function delete($id) {
            $linhafatura = Linhafatura::find($id);

            $linhafatura -> delete();

            $this -> redirectToRoute('linhafatura', 'index', ['fatura_id' => $linhafatura -> fatura -> id]);

        }
    }
?>
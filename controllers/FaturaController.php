<?php
    require_once './controllers/Controller.php';
    
    class FaturaController extends Controller {

        //Apenas o administrador tem acesso
        public function __construct() {
            $this -> authorizationFilter(['Admin', 'Funcionario']);
        }

        public function index() {
            $faturas = Fatura::all();
            $this -> renderView('fatura', 'index', ['faturas' => $faturas]);
        }

        public function show($id) {
            $fatura = Fatura::find($id);
            $this -> renderView('fatura', 'show', ['fatura' => $fatura]);
        }

        public function create() {
            $this -> renderView('fatura', 'create');
        }

        public function store() {
            $fatura = new Fatura($this -> getHTTPPost());
            $fatura -> valortotal = 0;

            if($fatura -> is_valid()) {
                $fatura -> save();
                
                $this -> renderView('home', 'home');
            }
            else {
                $this -> renderView('fatura', 'create', ['fatura' => $fatura]);
            }
        }

        public function edit($id) {
            $fatura = Fatura::find_by_id($id);

            if(is_null($fatura)) {
                $this -> redirectToRoute('home', 'home');
            }
            else {
                $this -> renderView('fatura', 'edit', ['fatura' => $fatura]);
            }
            
        }

        public function update($id) {
            $fatura = Fatura::find_by_id($id);

            $fatura -> update_attributes($this -> getHTTPPost());

            if($fatura -> is_valid()) {
                $fatura -> save();
                $this -> renderView('home', 'home');
            }

            else {
                $this -> renderView('fatura', 'edit',['fatura' => $fatura]);
            }
        }

        public function delete($id) {
            $fatura = Fatura::find($id);

            $fatura -> delete();

            $this -> redirectToRoute('fatura', 'index');

        }
    }
?>
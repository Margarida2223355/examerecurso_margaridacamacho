<?php
    class Fatura extends \ActiveRecord\Model {
        static $has_many = array(
            array('linhafaturas')
        );

        static $validates_presence_of = array(
            array('numero', 'message' => 'It must be provided'),
            array('dataemissao', 'message' => 'It must be provided'),
            array('nomecliente', 'message' => 'It must be provided'),
            array('moradacliente', 'message' => 'It must be provided'),
            array('nifcliente', 'message' => 'It must be provided'),
            array('valortotal', 'message' => 'It must be provided')
        );

        public function atualizar_total() {
            $valortotal=0;
            foreach($this -> linhafaturas as $linhafatura) {
                $valortotal += $linhafatura -> subtotal;
            }
            $this -> valortotal = $valortotal;
            $this -> save();
        }
    }
?>
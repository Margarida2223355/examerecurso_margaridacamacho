<?php
    class Produto extends \ActiveRecord\Model {
        static $has_many = array(
            array('linhafaturas')
        );

        static $validates_presence_of = array(
            array('referencia', 'message' => 'It must be provided'),
            array('descricao', 'message' => 'It must be provided'),
            array('precounitario', 'message' => 'It must be provided')
        );
    }
?>
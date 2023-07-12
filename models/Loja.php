<?php
    class Loja extends \ActiveRecord\Model {
        
        static $validates_presence_of = array(
            array('nome', 'message' => 'It must be provided'),
            array('nif', 'message' => 'It must be provided'),
            array('morada', 'message' => 'It must be provided'),
            array('telefone', 'message' => 'It must be provided'),
            array('email', 'message' => 'It must be provided')
        );
    }
?>
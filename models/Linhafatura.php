<?php
    class Linhafatura extends \ActiveRecord\Model {
        static $belongs_to = array(
            array('fatura'),
            array('produto')
        );

        static $validates_presence_of = array(
            array('fatura_id', 'message' => 'It must be provided'),
            array('produto_id', 'message' => 'It must be provided')
        );
    }
?>
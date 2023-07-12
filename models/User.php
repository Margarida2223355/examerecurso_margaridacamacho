<?php
    class User extends \ActiveRecord\Model {
        
        static $validates_presence_of = array(
            array('username', 'message' => 'It must be provided'),
            array('password', 'message' => 'It must be provided'),
            array('nomecompleto', 'message' => 'It must be provided'),
            array('email', 'message' => 'It must be provided'),
            array('morada', 'message' => 'It must be provided'),
            array('pais', 'message' => 'It must be provided'),
            array('telefone', 'message' => 'It must be provided'),
            array('role', 'message' => 'It must be provided')
        );
    }
?>
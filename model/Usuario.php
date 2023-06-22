<?php
    class Produto{
        public $usuario;
        public $senha;

        function __construct($usuario, $senha) {
            $this->usuario = $usuario;
            $this->senha = $senha;
        }
    }
?>
<?php
    class Cliente{
        public $login;
        public $senha;

        function __construct($login, $senha) {
            $this->login = $login;
            $this->senha = $senha;
        }
    }
?>
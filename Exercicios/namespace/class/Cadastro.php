<?php

    class Cadastro
    {
        private $nome;
        private $email;
        private $senha;

        public function getNome():string
        {
            return $this->nome;
        }
        public function getsenha():string
        {
            return $this->senha;
        }
        public function getEmail():string
        {
            return $this->email;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setSenha($senha)
        {
            $this->senha = $senha;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }


        public function __toString()
        {
            return json_encode(array(
            "nome" => $this-> getNome(),
            "email" => $this-> getEmail(),
            "senha" => $this-> getSenha()
        ));
        }
    }
?>
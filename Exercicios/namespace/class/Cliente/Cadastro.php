<?php

    namespace Cliente;
    class Cadastro extends \Cadastro
    {
        public function registraVendas()
        {
            echo "foi registrada uma venda para o cliente " . $this->getNome();
        }
    }

?>
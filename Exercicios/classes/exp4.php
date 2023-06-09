<?php

    class Endereco{
        private $logradoro;
        private $numero;
        private $cidade;

        public function __construct($a, $b, $c)
        {
            $this->logradoro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct()
        {
            //var_dump("DESTRUIR");
        }

        public function __toString()
        {
            return $this->logradoro.", ".$this->numero." - ".$this->cidade;
        }
    }

    $teste = new Endereco("Rua João Matheus Lamão", 3165, "Caçapava");
    /*var_dump($teste);
    unset($teste);*/

    echo $teste;

?>
<?php
    interface Veiculo{
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($velocidade);
    }

    class Civic implements Veiculo{
        public function acelerar($vel){
            echo "O carro acelerou " .$vel." km/h";
        }
        public function frenar($vel){
            echo "O carro acelerou " .$vel." km/h";
        }
        public function trocarMarcha($cambio){
            echo "O carro está na marcha " .$cambio;
        }
    }

    $obj = new Civic();
    $obj->trocarMarcha(2);

?>
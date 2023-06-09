<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo de Carro</title>
</head>

<body>
    <?php
    class Carro
    {
        private $modelo;
        private $motor;
        private $ano;

        public function getModelo()
        {
            return $this->modelo;
        }
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }

        public function getMotor()
        {
            return $this->motor;
        }
        public function setMotor($motor)
        {
            $this->motor = $motor;
        }

        public function getAno()
        {
            return $this->ano;
        }
        public function setAno($ano)
        {
            $this->ano = $ano;
        }

        public function exibir()
        {
            return array(
                'modelo' => $this->getModelo(),
                'motor' => $this->getMotor(),
                'ano' => $this->getAno()
            );
        }
    }
    $carroEscolhido = new Carro();
    $carroEscolhido->setModelo("Gol bolinha");
    $carroEscolhido->setMotor("2.0");
    $carroEscolhido->setAno("2022");
    print_r($carroEscolhido->exibir());

    ?>
</body>

</html>
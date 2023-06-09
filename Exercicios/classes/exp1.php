<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pessoa {
            public $nome;

            public function falar(){
                return "O meu nome é ".$this->nome;
            }
        }

        $joao = new Pessoa();
        $joao -> nome = "João Lamão";
        echo $joao ->falar();
    ?>
</body>
</html>
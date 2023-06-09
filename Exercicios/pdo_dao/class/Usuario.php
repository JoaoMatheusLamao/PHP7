<?php

class Usuario
{
    //dados que virão do banco
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario()
    {
        return $this->idusuario;
    }
    public function setIdusuario($value)
    {
        $this->idusuario = $value;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }
    public function setDeslogin($value)
    {
        $this->deslogin = $value;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }
    public function setDessenha($value)
    {
        $this->dessenha = $value;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }
    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;
    }

    //função para pegar as informações do banco
    public function loadById($id)
    {
        //instancia da classe Sql
        $sql = new Sql();

        //$result recebe todos os dados da tabela usuário onde o id do usuario for o id selecionado
        $result = $sql->exComand("select*from tb_usuario where id_usuário = :ID", array(":ID"=>$id));

        //o if verifica se foi retornado algo (neste caso, verifica se o array $result tem ao menos um indice)
        // teoricamente, $results deve receber apenas 1 indice (um outro array)
        if (count($result)>0) {

            //o primeiro indice do array $result é um array - para ver isso usar var_dump($result)
            //caso exista indices no array $result, $row recebe o primeiro indice do array $result
            //portanto, $row agora é um array que contém os dados do usuário
            //os indices do array $row são os nomes dos atributos do banco. para ver, usar var_dump($row);
            $row = $result[0];
            //aqui usamos os metodos set para atribuir valores às váriaveis criadas no começo.
            $this->setIdusuario($row['id_usuário']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }

    public function tbInteira(){
        $sql = new Sql();
        return $sql->exComand("select*from tb_usuario order by id_usuário", array());
    }

    //a funçao __toString faz com que seja possivél realizar um echo em um objeto.
    //quando for feito um echo no objeto que representa essa classe, a função toString é chamada e é exibido o se retorno
    public function __toString()
    {
        //retorna um json de um array, cujo os indices são os mesmos do banco e seus valores estão vindo a partir dos get's
        return json_encode(array(
            'id_usuário'=>$this->getIdusuario(),
            'dessenha'=>$this->getDessenha(),
            'deslogin'=>$this->getDeslogin(),
            'dtcadastro'=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}

?>
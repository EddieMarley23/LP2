<?php

require ("Carro.php");
class fruta{

    Public $nome;
    public $cor;

    function __construct($nome, $cor){
        $this -> nome = $nome;
        $this -> cor = $cor;
        

    }

    function set_cor($cor){
        $this ->cor = $cor;
    }
    function set_nome($nome){

        if($nome == "Renato"){
            $this->nome = "Inválido";
        }else{
        $this->nome = $nome;
        }
    }
    function get_nome(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }


}

$maca = new Fruta( "maçã" ,"Verde");
$banana = new Fruta("banana", "prata");
$mamao = new Fruta("Mamão Papaia","Verde");

$carro1 = new Carro("Renegade","Jeep","1999");

echo "<br> Carro 1 - marca = ".$carro1->get_marca()."<br> modelo = ".$carro1->get_modelo()."<br> ano = ".$carro1->get_ano();

// imprimir na tela
// objetos

//$maca ->cor = "Vermelho";
//$maca ->nome = "maçã";
echo "<br>".$maca-> get_nome();
echo "<br>".$maca-> get_cor();

echo "<br><br>";

//$banana ->cor = "Cor de Pele";
//$banana ->nome = "Basebal bat";
echo "<br>".$banana-> get_nome();
echo "<br>".$banana-> get_cor();

echo "<br><br>";

//$mamao ->cor = "Branco";
//$mamao ->nome = "Mama eu e os amigos";
echo "<br>".$mamao-> get_nome();
echo "<br>".$mamao-> get_cor();
?>
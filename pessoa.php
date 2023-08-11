<?php

class Pessoa{

    private $nome;
    private $idade;
    private $profissao;

    function __construct($nome, $idade, $profissao){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }
    function set_nome($nome){
        $this->nome = $nome;
    }
    function set_idade($idade){
        $this->idade = $idade;
    }
    // encapsulamento
    function set_profissao($profissao){
        
            $this->profissao = $profissao;
        
        
    }
    function get_nome(){
        return $this->nome;
    }
    function get_idade(){
        return $this->idade;
    }
    function get_profissao(){
        return $this->profissao;
    }

    function imprimirDados() {
  
        echo "<br><br> Olá, meu nome é ". $this->get_nome().", tenho".$this->get_idade()." anos e sou". $this->get_profissao();
    }

}



?>

<?php
    require_once "classes/cartorio.php";
    require_once "classes/casamento.php";
    require_once "classes/compraevenda.php";
    require_once "classes/cliente.php";
    require_once "classes/nascimento.php";
    require_once "classes/obito.php";
    require_once "classes/prestacaoServico.php";
    require_once "classes/propriedade.php";
    require_once "classes/trabalho.php";
    require_once "classes/contrato.php";
    require_once "classes/certidao.php";
    require_once "interface/registroCertidao.php";
    require_once "interface/registroContrato.php";
    
    class Cliente {
        private $nome;
        private $endereco;
        private $rg;
        private $cpf;
        private $cnpj;

        public function __construct($nome, $endereco, $rg, $cpf, $cnpj)
        {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->rg = $rg;
            $this->cpf = $cpf;
            $this->cnpj = $cnpj;
        }
    }
?>
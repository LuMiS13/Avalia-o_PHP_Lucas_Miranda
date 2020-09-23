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

    abstract class Certidao {
        public $nrRegistro;
        public $nomePessoaObjeto;
        public $nomeDeclarante;
        public $tipoCertidao;
        public $dataEmissao;
        public $nomeTabeliao;
        public $nomeCartorio;
        public $certidoes;
    }
?>
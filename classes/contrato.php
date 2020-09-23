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

    abstract class Contrato {
        public $nrRegistro;
        public $nomePartes;
        public $nomeTestemunhas;
        public $tipoContrato;
        public $dtEmissao;
        public $dtRegistro;
        public $nomeTabeliao;
        public $nomeCartorio;

        public function getRegistro()
        {
            return $this->nrRegistro;
        }
    }
?>
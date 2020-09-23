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
    
    class Obito extends Certidao {
        private $dataObito;

        public function __construct ($nrRegistro, Cliente $falecido, Cliente $familiar, $dataObito, $dataEmissao,
        $nomeTabeliao, $nomeCartorio)
        {
            $this->nrRegistro = $nrRegistro;
            $this->nomePessoaObjeto = $falecido;
            $this->nomeDeclarante = $familiar;
            $this->tipoCertidao = "Óbito";
            $this->dataObito = $dataObito;
            $this->dataEmissao = $dataEmissao;
            $this->nomeTabeliao = $nomeTabeliao;
            $this->nomeCartorio = $nomeCartorio;
        }
    }
?>
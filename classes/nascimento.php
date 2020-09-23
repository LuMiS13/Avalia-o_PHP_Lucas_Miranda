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

    class Nascimento extends Certidao {
        private $dataNascimento;

        public function __construct ($nrRegistro, $nascido, Cliente $pai, Cliente $mae, $dataNascimento,$dataEmissao,
        $nomeTabeliao, $nomeCartorio)
        {
            $this->nrRegistro = $nrRegistro;
            $this->PessoaObjeto = $nascido;
            $this->Declarante[] = ($pai);
            $this->Declarante[] = ($mae);
            $this->tipoCertidao = "Nascimento";
            $this->dataNascimento = $dataNascimento;
            $this->dataEmissao = $dataEmissao;
            $this->nomeTabeliao = $nomeTabeliao;
            $this->nomeCartorio = $nomeCartorio;
        }
    }
?>
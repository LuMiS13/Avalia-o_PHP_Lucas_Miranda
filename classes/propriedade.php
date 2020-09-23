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
    
    class Propriedade extends Certidao {
        private $dataAquisicao;
        private $endereco;
        
        public function __construct ($nrRegistro, $objeto, $endereco, Cliente $proprietario, $dataAquisicao, $dataEmissao,
        $nomeTabeliao, $nomeCartorio)
        {
            $this->nrRegistro = $nrRegistro;
            $this->PessoaObjeto = $objeto;
            $this->endereco = $endereco;
            $this->Declarante = $proprietario;
            $this->tipoCertidao = "Propriedade";
            $this->dataAquisicao = $dataAquisicao;
            $this->dataEmissao = $dataEmissao;
            $this->nomeTabeliao = $nomeTabeliao;
            $this->nomeCartorio = $nomeCartorio;
        }
    }
?>
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
    
    class Casamento extends Certidao {
        public function __construct ($nrRegistro, Cliente $marido, Cliente $esposa, $dataCasamento, $dataEmissao,
        $nomeTabeliao, $nomeCartorio)
        {
            $this->nrRegistro = $nrRegistro;
            $this->nomePessoaObjeto[] = ($marido);
            $this->nomePessoaObjeto[] = ($esposa);
            $this->nomeDeclarante[] = ($marido);
            $this->nomeDeclarante[] = ($esposa);
            $this->tipoCertidao = "Casamento";
            $this->dataCasamento = $dataCasamento;
            $this->dataEmissao = $dataEmissao;
            $this->nomeTabeliao = $nomeTabeliao;
            $this->nomeCartorio = $nomeCartorio;
        }
    }
?>
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
    
    class CompraEVenda extends contrato {
        public function __construct ($nrRegistro, Cliente $comprador, Cliente $vendedor, Cliente $testemunha1,
        Cliente $testemunha2, $dataEmissao, $dataRegistro, $nomeTabeliao, $nomeCartorio)
        {
            $this->nrRegistro = $nrRegistro;
            $this->nomePartes[] = ($comprador);
            $this->nomePartes[] = ($vendedor);
            $this->nomeTestemunhas[] = ($testemunha1);
            $this->nomeTestemunhas[] = ($testemunha2);
            $this->tipoContrato = "Compra E Venda";
            $this->dataEmissao = $dataEmissao;
            $this->dataRegistro = $dataRegistro;
            $this->nomeTabeliao = $nomeTabeliao;
            $this->nomeCartorio = $nomeCartorio;
        }
    }
?>
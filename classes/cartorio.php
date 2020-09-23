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

    class Cartorio implements RegistroContrato, RegistroCertidao{
        private $contratos;
        private $certidoes;

        public function registrarCertidao($certidao)
        {
            $this->certidoes[] = ($certidao);
        }

        public function registrarContrato($contrato){
            $this->contratos[] = ($contrato);
        }

        public function getCertidoes()
        {
            return $this->certidoes;
        }

        public function getContratos()
        {
            return $this->contratos;
        }
    }
?>
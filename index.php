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

    $c1 = new Cliente("l", "m", "1", "2", "");
    $c2 = new Cliente("a", "b", "1", "2", "");
    $nasc = new Nascimento("1", "la", $c1, $c2, "1", "2", "t", "c");
    var_dump ($nasc);
    $cart = new Cartorio;
    $cart->registrarCertidao($nasc);
    var_dump($cart->getCertidoes());

?>
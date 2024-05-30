<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TPanelGroup;

class TestePainel extends TPage {
    public function __construct()
    {
        parent::__construct();
    }


    public function ExibePainel()
    {
        $painel = new TPanelGroup("--------Título---------");
        $conteudo = "(***)Conteuo(***)";
        $painel->add($conteudo);
        $content_footer = "&Copy";
        $painel->addFooter($content_footer);

        parent::add($painel);
    }
}
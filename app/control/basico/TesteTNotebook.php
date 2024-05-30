<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TNotebook;
use Adianti\Widget\Container\TPanelGroup;

class TesteTNotebook extends TPage{
    public function __construct()
    {
        parent::__construct();
    }

    public function ExibeTNotebook()
    {
        $painel_main = new TPanelGroup("Painel admin");
        $panel_form_person = new TPanelGroup("Form Person");
        $content_form_person = "Form for create person.";
        $content_footer = "&COPY";
        $panel_form_person->add($content_form_person);
        $panel_form_person->addFooter($content_footer);

        $panel_form_member = new TPanelGroup("Form Member");
        $content_form_member = "Form create member";
        $panel_form_member->add($content_form_member);
        $panel_form_member->addFooter($content_footer);

        $navs = new TNotebook();

        $navs->appendPage("Formulário pessoa", $panel_form_person);
        $navs->appendPage("Formulário membro", $panel_form_member);

        $painel_main->add($navs);

        parent::add($painel_main);
    }
}
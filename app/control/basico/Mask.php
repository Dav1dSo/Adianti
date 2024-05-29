<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TVBox;
use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Template\THtmlRenderer;

class Mask extends TPage {
    public function __construct()
    {
        parent::__construct();
    }

    public function TesteMask() 
    {

        try {
            $html = new THtmlRenderer('app/resources/TesteRenderHtml.html');

            $data = [];

            $data['date'] = date('Y-m-d');
            $data['datetime'] = date('Y-m-d H:i:s');
            $data['number'] = 12351.55;
            $data['number1'] = 1223;
            $data['numbe2'] =1.55;

            $replaces = $data;

            $html->enableSection('main', $data);
            $box = new TVBox;
            $box->add($html);
            parent::add($box);
        }
        catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}
<?php

use Adianti\Control\TAction;
use Adianti\Control\TPage;
use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Dialog\TQuestion;

class TesteTMessage extends TPage {
    public function __construct()
    {
        parent::__construct();
        $sim =  new TAction([$this, 'actionSim']);
        $nao =  new TAction([$this, 'actionNao']);

        new TQuestion("Escolha sim ou não:", $sim, $nao);
    }
    public static function actionSim()
    {
        new TMessage("info", "Voce escolheu sim.");
    }
    public static function actionNao()
    {
        new TMessage("info", "Voce escolheu nao.");
    }
}

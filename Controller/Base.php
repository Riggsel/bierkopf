<?php

namespace Controller;

use Entity\Table;
use Entity\Cards;
use Twig\Environment;

class Base
{
    private $table;
    private $twig;
    
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    
    public function init()
    {
        $this->table = new Table();
        
        $players = new \Players();
        
        $cards = new Cards();
        $allCards = $cards->getAll();

        echo $this->twig->render('index.html', array('allCards' => $allCards));
    }
    
    public function setPost()
    {
        $testData = array(
            "players" => array(
                ""
            ),
        );
        
        $table = new Table();
        $table->setRound($testData["round"]);
        $table->setPlayers($testData['players']);
        
        $table->start();
    }
}
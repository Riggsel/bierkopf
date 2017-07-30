<?php

namespace Controller;

use Entity\Table;
use Entity\Cards;

class Base
{
    private $table;

    public function init()
    {
        $loader = new Twig_Loader_Filesystem( dirname(__DIR__) . '\bierkopf\Assets');
        $twig = new Twig_Environment(
            $loader,
            array( 'cache' => '/path/to/compilation_cache',)
        );

        echo $twig->render('index.html', array('name' => 'Fabien'));


        $this->table = new Table();

        include(dirname(__DIR__) . "\Assets\index.html");
        
        $cards = new Cards();
        $allCards = $cards->getAll();
        var_dump($allCards);
        foreach ($allCards as $color => $card) {
            
        }
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
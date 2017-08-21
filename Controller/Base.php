<?php

namespace Controller;

use Entity\Table;
use Entity\Cards;
use Entity\Players;

use Twig\Environment;

class Base
{
    private $table;
    private $twig;

    public function setTemplateEngine(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function init()
    {
        if (!empty($_POST)) {
            $this->setPlayers();
        } else {
            echo $this->twig->render('index.html', array());
        }
    }

    public function setPlayers()
    {
        $players = new Players();
        foreach ($_POST['players'] as $player) {
            if (is_array($player)) {
                $players->addPlayer($player);
            }
        }

        $cards = new Cards();

        $players = $cards->dishOut($players);

        echo $this->twig->render('index.html',
            array(
                "players" => $players->getPlayers(),
                "game_started" => true
            )
        );
    }

    public function cardAction($request, $round)
    {
        if (empty($request) || empty($request["card"])) {
            echo "Kein Spieler gesetzt";
            return;
        }

        $card = new Card();

        $this->table->setCard($request["card"]);
    }

}
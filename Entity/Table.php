<?php

namespace Entity;

use Entity\Players;
use Controller\Base;

class Table extends Base
{
    private $round;
    private $players;
    private $cards;
    private $teams;

    const MAX_PLAYERS = 4;
    const MAX_CARDS_ON_TABLE = 4;
    const GAME_TYPE = 'CROSS';

    public function start()
    {

    }
    
    public function getMaxPlayers()
    {
        return self::MAX_PLAYERS;
    }

    public function getGameType()
    {
        return self::GAME_TYPE;
    }

    /**
     * @return mixed
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * @param mixed $round
     */
    public function setRound($round)
    {
        $this->round = $round;
    }

    /**
     * @return Players
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param mixed $players
     */
    public function setPlayers($players)
    {
        $this->players = $players;
    }

    /**
     * @return mixed
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * @param mixed $teams
     */
    public function setTeams($teams)
    {
        $this->teams = $teams;
    }

    /**
     * @param array $card
     */
    public function setCard($card)
    {
        if (count($this->cards) == self::MAX_CARDS_ON_TABLE) {
            echo 'Maximale Anzahl an Karten erreicht';
            return $this->cards;
        }

        $this->cards[] = $card;
    }

    public function getCards()
    {
        return $this->cards;
    }
}
<?php

namespace Entity;

use Entity\Players;

class Table
{
    private $round;

    private $players;

    private $teams;

    const MAX_PLAYERS = 4;
    const GAME_TYPE = 'CROSS';

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
}
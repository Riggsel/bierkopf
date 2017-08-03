<?php

namespace Entity;

use Entity\Player;

class Players
{
    private $players = array();

    const MAX_PLAYERS = 4;

    public function createNewPlayer(array $credentials, $isBot = true)
    {
        if (empty($credentials)) {
            echo "Fehlende Spielerdaten.";
            return false;
        }

        if (count($this->players) >= self::MAX_PLAYERS) {
            echo  "Maximale Anzahl an Spielern berreichts erreicht!";
            return false;
        }

        $this->players[] = new Player($credentials);

        return true;
    }

    /**
     * @return arrayr
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @return int
     */
    public function getMaxPlayers()
    {
        return self::MAX_PLAYERS;
    }
}
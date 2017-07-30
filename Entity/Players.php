<?php

class Players
{
    private $players;
    const MAX_PLAYERS = 4;

    public function setPlayer(Player $player, $isBot = true)
    {
        if (count($this->players) >= self::MAX_PLAYERS) {
            echo  "Maximale Anzahl an Spielern berreichts erreicht!";
            return false;
        }
        
        $this->players[] = $player;
        
        return true;
    }
    
    public function getPlayers()
    {
        return $this->players;
    }

    public function getMaxPlayers()
    {
        return self::MAX_PLAYERS;
    }
}
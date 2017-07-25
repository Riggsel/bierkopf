<?php

class Player
{
    private $isBot;
    private $isHuman;
    private $cards;
    private $hasTurn;
    private $statistics;

    /**
     * @return mixed
     */
    public function getIsBot()
    {
        return $this->isBot;
    }

    /**
     * @param mixed $isBot
     */
    public function setIsBot($isBot)
    {
        $this->isBot = $isBot;
    }

    /**
     * @return mixed
     */
    public function getIsHuman()
    {
        return $this->isHuman;
    }

    /**
     * @param mixed $isHuman
     */
    public function setIsHuman($isHuman)
    {
        $this->isHuman = $isHuman;
    }

    /**
     * @return Cards
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param mixed $cards
     */
    public function setCards($cards)
    {
        $this->cards = $cards;
    }

    /**
     * @return mixed
     */
    public function getHasTurn()
    {
        return $this->hasTurn;
    }

    /**
     * @param mixed $hasTurn
     */
    public function setHasTurn($hasTurn)
    {
        $this->hasTurn = $hasTurn;
    }

    /**
     * @return Statistic
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param mixed $statistics
     */
    public function setStatistics($statistics)
    {
        $this->statistics = $statistics;
    }
}
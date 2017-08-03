<?php
namespace Entity;

use Entity\Players;

class Cards
{
    private $assetsPath;
    
    private $cardCounts = array(
        'Ass' => array(
            'value' => 11,
            'base_power' => 4,
        ),
        'Zehn' => array(
            'value' => 10,
            'base_power' => 3,
        ),
        'König' => array(
            'value' => 4,
            'base_power' => 2,
        ),
        'Neun' => array(
            'value' => 0,
            'base_power' => 1,
        ),
        'Ober' => array(
            'value' => 3,
            'base_power' => 6,
        ),
        'Unter' => array(
            'value' => 2,
            'base_power' => 5,
        ),
    );

    private $cardColors = array(
        'Herz' => 24,
        'Eichel' => 18,
        'Blatt' => 12,
        'Schellen' => 6,
    );

    const ASSETS_PATH = "%s\Assets\Images\Cards\%s_%s.png";

    public function dishOut(Players $players)
    {
        $cardPiles = array_chunk(
            $this->getAll(),
            $players->getMaxPlayers()
        );

        foreach ($cardPiles as $pile) {
            foreach ($players->getPlayers() as $player) {
                $player->setCards($pile);
            }
        }

        return $players;
    }

    public function getAll()
    {
        $allCards = [];
        foreach ($this->cardColors as $colorName => $colorPower) {

            foreach ($this->cardCounts as $cardName => $cardCount) {
                $cardCount['power'] = $colorPower * $cardCount['base_power'];
                $cardCount['image'] = $this->getCardImage($colorName, $cardName);

                $allCards[$colorName][$cardName] = $cardCount;
            }
        }

        if (count($allCards) == 24) {
            shuffle($allCards);
        }

        return $allCards;
    }
    
    private function getCardImage($colorName, $cardName)
    {
        return sprintf(
            self::ASSETS_PATH,
            dirname(__DIR__),
            $colorName,
            $cardName
        );
    }
}
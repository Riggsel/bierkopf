<?php

namespace Entity;

class Card
{
    /**
     * @var string $id
     */
    private $id;
    /**
     * @var int value
     */
    private $value;

    /**
     * @var int $basePower
     */
    private $basePower;

    /**
     * @var int $power
     */
    private $power;

    /**
     * @var string $color
     */
    private $color;

    /**
     * @var string $image
     */
    private $image;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param int $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getBasePower()
    {
        return $this->basePower;
    }

    /**
     * @param int $basePower
     */
    public function setBasePower($basePower)
    {
        $this->basePower = $basePower;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * returns the overall power calculated by its color
     * and its base power
     *
     * @return int
     */
    public function getOverallPower()
    {
        return $this->color * $this->basePower;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/06/19
 * Time: 09:09
 */

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "Blue";

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
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
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    public function toString()
    {
        if ($this->on){
            return "Fan is off. Radius = " . $this->getRadius() . ", color = " . $this->getColor();
        } else {
            return "Fan is on. Speed = " . $this->getSpeed() . ", color = " . $this->getColor() . ", radius = " . $this->getRadius();
        }
    }
}
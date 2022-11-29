<?php 

namespace php_latest\homeworks;

use InvalidArgumentException;

class Color{

    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {

        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);

    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }
    
    public function mix(Color $ColorObject): Color
    {

        $red = ($this->getRed() + $ColorObject->getRed())/2;

        $green = ($this->getGreen() + $ColorObject->getGreen())/2;

        $blue = ($this->getBlue() + $ColorObject->getBlue())/2;

        return new Color($red, $green, $blue);

    }

    public function equals(Color $Color): bool
    {

        if ($this !== $Color){

            return false;

        }

        return true;

    }

    protected function setRed(int $color): int
    {

        $this->checkColor($color);

        return $this->red = $color;

    }

    protected function setGreen(int $color): int
    {

        $this->checkColor($color);

        return $this->green = $color;

    }

    protected function setBlue(int $color): int
    {

        $this->checkColor($color);

        return $this->blue = $color;

    }

    protected function checkColor(int $value): bool|InvalidArgumentException
    {

        if ($value < 0 || $value > 255){
            throw new InvalidArgumentException("Некоректне значення кольору!", 422);
        }

        return true;

    }    

    public static function random(): Color
    {

        $random_red = rand(0, 255);
        $random_blue = rand(0, 255);
        $random_green = rand(0, 255);

        return new Color($random_red, $random_green, $random_blue);

    }

}

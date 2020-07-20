<?php


namespace App;


class RGB
{
    private $red = null;
    private $green = null;
    private $blue = null;

    public function __construct($red, $green, $blue)
    {
        try {
            $this->setRed($red);
            $this->setGreen($green);
            $this->setBlue($blue);
        }catch(\Exception $e){
            echo $e->getMessage();
            exit();
        }
    }

    public function equals(RGB $color){
        return $this->red === $color->getRed() && $this->green === $color->getGreen() && $this->blue === $color->getBlue();
    }

    public static function random(){
        return new RGB(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    }

    public function mix(RGB $color){
        return new RGB(
            ($this->red + $color->getRed()) / 2,
            ($this->green + $color->getGreen()) / 2,
            ($this->blue + $color->getBlue()) / 2
        );
    }

    private function setRed($red)
    {
        if($red < 0 || $red > 255) throw new \Exception('Ошибка. Диапазон от 0 до 255');

        $this->red = $red;
    }
    private function setGreen($green)
    {
        if($green < 0 || $green > 255) throw new \Exception('Ошибка. Диапазон от 0 до 255');

        $this->green = $green;
    }
    private function setBlue($blue)
    {
        if($blue < 0 || $blue > 255) throw new \Exception('Ошибка. Диапазон от 0 до 255');

        $this->blue = $blue;
    }

    public function getRed()
    {
        return $this->red;
    }
    public function getGreen()
    {
        return $this->green;
    }
    public function getBlue()
    {
        return $this->blue;
    }

}
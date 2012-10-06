<?php

class Wardrobe
{
    protected $size;
    protected $color;
    protected $vendor;

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    public function getCharacteristics()
    {
        return $this->size . $this->color . $this->vendor;
    }
}

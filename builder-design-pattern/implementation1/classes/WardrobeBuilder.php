<?php

class WardrobeBuilder
{
    protected $wardrobe = null;
    protected $config   = array();

    public function __construct(array $config)
    {
        $this->wardrobe = new Wardrobe();
        $this->config   = $config;
    }

    public function build()
    {
        $this->wardrobe->setSize($this->config['size']);
        $this->wardrobe->setColor($this->config['color']);
        $this->wardrobe->setVendor($this->config['vendor']);
    }

    public function getWardrobe()
    {
        return $this->wardrobe;
    }
}

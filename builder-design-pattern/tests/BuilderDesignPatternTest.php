<?php

class BuilderDesignPatternTest extends PHPUnit_Framework_TestCase
{
    public function testBuilderClass()
    {
        $config = array(
          'size'    => 'big',
          'color'   => 'brown',
          'vendor'  => 'ikea',
        );

        $wardrobe = new Wardrobe();
        $wardrobe->setSize($config['size']);
        $wardrobe->setColor($config['color']);
        $wardrobe->setVendor($config['vendor']);

        $wardrobeBuilder = new WardrobeBuilder($config);
        $wardrobeBuilder->build();
        $builtWardrobe = $wardrobeBuilder->getWardrobe();

        $this->assertEquals('bigbrownikea', $wardrobe->getCharacteristics());

        $this->assertClassHasAttribute('size', get_class($builtWardrobe));
        $this->assertClassHasAttribute('color', get_class($builtWardrobe));
        $this->assertClassHasAttribute('vendor', get_class($builtWardrobe));
        $this->assertEquals('bigbrownikea', $builtWardrobe->getCharacteristics());
    }
}

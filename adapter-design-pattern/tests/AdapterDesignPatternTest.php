<?php

class AdapterDesignPatternTest extends PHPUnit_Framework_TestCase
{
    public function testObject()
    {
        $error = new Error('500 Error');
        $this->assertEquals('500 Error', $error->getError());
    }
}

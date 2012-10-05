<?php

class AdapterDesignPatternTest extends PHPUnit_Framework_TestCase
{
    public function testErrorClass()
    {
        $error = new Error('500:1:Error');

        $this->assertEquals('500:1:Error', $error->getError());
    }

    public function testConsoleLoggerClass()
    {
        $error = new Error('404:2:Error');
        $consoleLogger = new ConsoleLogger($error);

        $this->assertEquals('404:2:Error', $error->getError());
        $this->assertEquals('404:2:Error', $consoleLogger->write());
    }

    public function testCsvLoggerAdapter()
    {
        $error = new CsvLoggerAdapter('302:3:Very light error');
        $csvLogger = new CsvLogger($error);

        $this->assertEquals('302', $error->getErrorNumber());
        $this->assertEquals('3', $error->getErrorLevel());
        $this->assertEquals('Very light error', $error->getErrorMessage());
        $this->assertEquals('302,3,Very light error', $csvLogger->write());
    }
}

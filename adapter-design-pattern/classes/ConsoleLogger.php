<?php

class ConsoleLogger
{
    private $error;

    public function __construct(Error $error)
    {
        $this->error = $error;  
    }

    public function write()
    {
        $memoryStream = fopen('php://memory', 'r+');

        fputs($memoryStream, $this->error->getError());
        rewind($memoryStream);

        return stream_get_contents($memoryStream);
    }
}

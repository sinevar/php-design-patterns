<?php

class CsvLogger
{
    private $error;

    public function __construct(Error $error)
    {
      $this->error = $error;
    }

    public function write()
    {
      $line = array();
      $line[] = $this->error->getErrorNumber();
      $line[] = $this->error->getErrorLevel();
      $line[] = $this->error->getErrorMessage();
      $string = implode(',', $line);

      $tempStream = fopen('php://temp/maxmemory:1024', 'r+');
      fputs($tempStream, $string);
      rewind($tempStream);

      return stream_get_contents($tempStream);
    }
}

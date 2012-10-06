<?php

class CsvLoggerAdapter extends Error
{
    private $errorNumber, $errorLevel, $errorMessage;

    public function __construct($error)
    {
        parent::__construct($error);  

        $parts = explode(':', $this->getError());
        $this->errorNumber  = $parts[0];
        $this->errorLevel   = $parts[1];
        $this->errorMessage = $parts[2];
    }

    public function getErrorNumber()
    {
        return $this->errorNumber;
    }

    public function getErrorLevel()
    {
        return $this->errorLevel;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}

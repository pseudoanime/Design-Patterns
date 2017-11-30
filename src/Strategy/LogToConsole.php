<?php namespace Strategy;

class LogToConsole implements Log
{
    public function log($data)
    {
        echo "Log to Console";
    }
}

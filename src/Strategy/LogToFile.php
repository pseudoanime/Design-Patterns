<?php namespace Strategy;

class LogToFile implements Log
{
    function log($data)
    {
        echo "Log to File";
    }

}

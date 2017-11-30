<?php namespace Strategy;

class LogToServer implements Log
{

    function log($data)
    {
        echo "Log to Server";
    }
}

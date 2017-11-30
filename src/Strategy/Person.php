<?php namespace Strategy;

class Person
{
    public function Log($data, Log $log = null)
    {
        $log = is_null($log) ? (new LogToFile()) : $log;

        $log->log($data);
    }
}

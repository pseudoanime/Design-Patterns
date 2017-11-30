<?php

use Strategy\LogToConsole;
use Strategy\LogToFile;
use Strategy\LogToServer;
use Strategy\Person;

class StrategyTest extends PHPUnit_Framework_TestCase
{
    public function testPersonCanLogToConsole()
    {
        (new Person())->Log("", new LogToConsole());

        $this->expectOutputString("Log to Console");
    }

    public function testPersonCanLogToFile()
    {
        (new Person())->Log("", new LogToFile(""));

        $this->expectOutputString("Log to File");
    }

    public function testPersonCanLogToServer()
    {
        (new Person())->Log("", new LogToServer(""));

        $this->expectOutputString("Log to Server");
    }

    public function testPersonWithoutExplicitLogWillBeLoggedToFile()
    {
        (new Person())->Log("");

        $this->expectOutputString("Log to File");
    }
}

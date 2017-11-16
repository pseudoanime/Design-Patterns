<?php namespace Adapter;

class Kindle implements ebookInterface
{
    public function turnOn()
    {
        return "Turn on Kindle\n";
    }

    public function PressNext()
    {
        return "Press Kindle next button\n";
    }
}

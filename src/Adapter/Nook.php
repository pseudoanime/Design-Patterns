<?php namespace Adapter;

class Nook implements ebookInterface
{

    public function turnOn()
    {
        return "Turn on Nook\n";
    }

    public function pressNext()
    {
        return "Press Nook next button\n";
    }
}

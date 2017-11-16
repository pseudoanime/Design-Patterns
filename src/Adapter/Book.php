<?php namespace Adapter;

class Book implements BookInterface
{
    public function openBook()
    {
        return "Open book\n";
    }

    public function turnPage()
    {
        return "Turn page\n";
    }
}

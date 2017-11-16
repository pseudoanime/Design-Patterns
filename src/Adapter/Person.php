<?php namespace Adapter;

class Person
{
    public function read(BookInterface $book)
    {
        return $book->openBook() . $book->turnPage();
    }

}






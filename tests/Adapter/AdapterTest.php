<?php namespace Tests\Adapter;

use Adapter\Book;
use Adapter\ebookAdapter;
use Adapter\Nook;
use Adapter\Person;
use Adapter\Kindle;

class AdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testPersonCanReadPhysicalBook()
    {
        $response=(new Person())->read(new Book());

        $this->assertEquals("Open book\nTurn page\n", $response);

    }

    public function testPersonCanReadKindle()
    {
        $response=(new Person())->read(new ebookAdapter(new Kindle()));

        $this->assertEquals("Turn on Kindle\nPress Kindle next button\n", $response);

    }

    public function testPersonCanReadNook()
    {
        $response=(new Person())->read(new ebookAdapter(new Nook()));

        $this->assertEquals("Turn on Nook\nPress Nook next button\n", $response);

    }
}

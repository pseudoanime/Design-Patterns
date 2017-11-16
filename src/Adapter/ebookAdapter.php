<?php namespace Adapter;

class ebookAdapter implements BookInterface
{
    private $ebook;

    /**
     * KindleAdapter constructor.
     *
     * @param $ebook
     */
    public function __construct(ebookInterface $ebook)
    {
        $this->ebook = $ebook;
    }

    public function openBook()
    {
        return $this->ebook->turnOn();
    }

    public function turnPage()
    {
        return $this->ebook->PressNext();
    }
}

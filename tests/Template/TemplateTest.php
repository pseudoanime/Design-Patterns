<?php namespace Tests\Template;


use Template\TurkeySub;
use Template\VeggieSub;

class TemplateTest extends \PHPUnit_Framework_TestCase
{
    public function testMakeVeggieSub()
    {
        (new VeggieSub())->make();

        $this->expectOutputString('laying bread,adding Lettuce,adding Veggies,add Sauces');
    }

    public function testMakeTurkeySub()
    {
        (new TurkeySub())->make();

        $this->expectOutputString('laying bread,adding Lettuce,adding Turkey,add Sauces');
    }
}

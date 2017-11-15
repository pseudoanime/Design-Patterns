<?php namespace Tests\Decorator;

use Decorator\carWash;
use Decorator\OilChange;
use Decorator\TyreRotation;

require 'vendor/autoload.php';

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    public function testOilChangeCarWash()
    {
        $service = new OilChange(new carWash);

        $this->assertEquals(35, $service->getCosts());
    }

    public function testTyreRotationOIlChangeCarWash()
    {
        $service = new TyreRotation(new OilChange(new carWash));

        $this->assertEquals(75, $service->getCosts());
    }
}

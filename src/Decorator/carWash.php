<?php namespace Decorator;

class carWash implements carService {

    public function getCosts()
    {
        return 10;
    }

}

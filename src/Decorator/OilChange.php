<?php namespace Decorator;

class OilChange implements carService {

    private $carService;

    /**
     * OilChange constructor.
     *
     * @param $carService
     */
    public function __construct($carService)
    {
        $this->carService = $carService;
    }


    public function getCosts()
    {
        return 25 + $this->carService->getCosts();
    }
}

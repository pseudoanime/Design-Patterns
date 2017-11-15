<?php namespace Decorator;

class TyreRotation implements carService{

    private $carService;

    /**
     * TypeRotation constructor.
     *
     * @param $carService
     */
    public function __construct($carService)
    {
        $this->carService = $carService;
    }


    public function getCosts()
    {
        return 40 + $this->carService->getCosts();
    }

}

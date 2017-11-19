<?php namespace Template;

abstract class Sub
{
    public function make()
    {
        return $this->layBread()
            ->addLettuce()
            ->addToppings()
            ->addSauces();
    }

    public function layBread()
    {
        print("laying bread,");

        return $this;
    }

    public function addLettuce()
    {
        print("adding Lettuce,");

        return $this;
    }

    public function addSauces()
    {
        print "add Sauces";

        return $this;
    }

    abstract function addToppings();
}

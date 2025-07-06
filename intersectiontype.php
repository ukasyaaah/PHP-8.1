<?php

interface HasBrand
{
    function getBrand(): string;
}

interface HasName
{
    function getName(): string;
}

class Car implements HasName, HasBrand
{

    public function __construct(public $name, public $brand) {}

    function getName(): string
    {

        return $this->name;
    }

    function getBrand(): string
    {
        return $this->brand;
    }
}


function getBrandAndName(HasName & HasBrand $value)
{
    echo $value->getName() . ' ' . $value->getBrand() . PHP_EOL;
}

getBrandAndName(new Car('Honda', 'Mobillo'));

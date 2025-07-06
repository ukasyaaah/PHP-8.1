<?php

class Person
{

    public function __construct(public string $name) {}

    function sayHello(string $name)
    {
        echo "Hello $name, my name is $this->name" . PHP_EOL;
    }
}

$person = new Person('Ukhasyah');

$reference = $person->sayHello(...);

$reference("Adi"); // Hello Adi, my name is Ukhasyah

$ref2 =  strtolower(...);

echo $ref2("HALO");
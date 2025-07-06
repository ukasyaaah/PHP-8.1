<?php

require_once 'readonly.php';

class FavMovToPerson
{
    public function __construct(
        public string $name,
        public Film $film = new Film('Dilan', 'Romance')
    ) {}
}

$person = new FavMovToPerson('Pidi');
var_dump($person);

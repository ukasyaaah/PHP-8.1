<?php

class  Film
{
    // Promoted Property
    public function __construct(
        public readonly string $judul,
        public readonly string  $genre,
    ) {}
}


$film = new Film(
    judul: 'Bring Her Back',
    genre: 'Horror'
);

var_dump($film->judul);

<?php
interface Hi
{
    function sayHi();
}

trait JavaneseGender
{
    function inJava($java): Kelamin | string
    {
        return match ($java) {
            'Mas' => Kelamin::Lanang,
            'Mbak' => Kelamin::Wedok,
            default =>  'Kelamin Ga tersedia'
        };
    }
}
// bisa di anggap tipe data
enum Kelamin: string implements Hi
{
    use JavaneseGender;

        // Backed enum : case harus ada value nya
    case Lanang = "Tuan";
    case Wedok = "Nyonya";
    const UNKNOWN = "Unkonwn";

    // Enum Method
    function sayHi()
    {
        echo "Hi $this->value" . PHP_EOL;
    }

    function inEnglish(): string
    {
        return  match ($this) {
            Kelamin::Lanang => 'Mr' . PHP_EOL,
            Kelamin::Wedok => 'Mrs' . PHP_EOL,
        };
    }
}

class Person
{
    function __construct(
        public string $name,
        public Kelamin $kelamin,
    ) {}
}

function sayHello(Person $person)
{
    if ($person->kelamin == null) {
        echo "Are you non biner?" . PHP_EOL;
    } else {
        // Gunakan value utk dapetin value nya
        echo "Hello " . $person->kelamin->value . ' ' . $person->name . PHP_EOL;
    }
}

$adi = new Person('Adi', Kelamin::from('Tuan'));
sayHello($adi);


Kelamin::Lanang->sayHi();
echo Kelamin::Wedok->inEnglish();
echo Kelamin::Wedok->inEnglish();

// $ari  = Kelamin::Lanang;

var_dump(Kelamin::Lanang->inJava('ffsaf'));

echo Kelamin::UNKNOWN . PHP_EOL;


// Utk dapetin semua array enum
var_dump(Kelamin::cases());

<?php
class NewAnimal
{
    public $name;
    protected $foot;
    private $isMamal;

    // public function __construct($nama, $foot, $isMamal)
    // {
    //     $this->name = $nama;
    //     $this->foot = $foot;
    //     $this->isMamal = $isMamal;
    // }

    public function introduce(string $sound): void
    {
        echo "Hello My Animal Name Is {$this->name}";
        echo "<br>";

        echo $this->sound($sound);
    }
    public function sound(string $sound): ?string
    {
        if ($sound) {
            return " Its sound is {$sound}";
        }

        return Null;
    }
}

$cat = new NewAnimal("Kucing Oren", 4, true);

print_r($cat);
echo "<br>";

// $cat->name = "Kucing Oren";
// $cat->foot = 4;
// $cat->isMamal = true;

print_r($cat);
echo "<br>";

echo $cat->name;
echo "<br>";
$cat->introduce("");

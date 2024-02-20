<?php
class Animal
{
    public string $name;
    public int $foot;
    public bool $isMamal;
    protected string $color = "";
    private int $age = 0;

    public function __construct($name, $foot, $isMamal)
    {
        $this->name = $name;
        $this->foot = $foot;
        $this->isMamal = $isMamal;
    }

    public function eat(string $foodName): string
    {
        return "$this->name eating the $foodName";
    }

    public function setColorAge(string $color, int $age)
    {
        $this->color = $color;
        $this->age = $age;
    }

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

    public function getAge()
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }
}

$cat = new Animal("Kucing Oren", 4, true);
echo $cat->eat("fish");
echo "<br>";

//$cat->setColorAge("Red", 2);
// print_r($cat);
// echo "<br>";
$cat->setAge(2);
echo $cat->getAge();

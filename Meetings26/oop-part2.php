<?php
class MyAnimal
{
    protected string $name;
    protected string $speed;

    //encapsulation
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
}



//inheritance
class TonoAnimal extends MyAnimal
{
    public function getRace(): string
    {
        return $this->speed;
    }
    public function setRace($speed)
    {
        $this->speed = is_string($speed) ? $speed : "unknown";
    }

    //overriding
    public function getName(): string
    {
        return "the animal name is {$this->name}";
    }
}


$cat = new MyAnimal;
$cat->setName("Ucup");
echo $cat->getName();
echo "<br>";

$dog = new TonoAnimal;
$dog->setName("Blacky");
echo $dog->getName();
echo "<br>";

// $dog->setRace("fast");
// echo $dog->getRace();

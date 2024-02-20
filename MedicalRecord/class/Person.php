<?php
class Person
{
    public string $name = "";
    public int $age = 0;
    public string $gender = "m";
    public float $height = 0;
    public float $weight = 0;
    public float $waistSize = 0;

    public function bio(string $name, int $age, string $gender): void
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function bodyFact(float $height, float $weight, float $waistSize): void
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->waistSize = $waistSize;
    }
}

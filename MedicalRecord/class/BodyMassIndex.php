<?php
class BodyMassIndex
{
    public float $score = 0;
    public string $category = "";

    public function calculate(float $height = 0, float $weight = 0): void
    {
        if ($height != 0 || $weight != 0) {
            $bmi = $weight / ($height / 100) * ($height / 100);
            $this->score = $bmi;
        }
    }
    public function determineCategory(): string
    {
        if ($this->score < 18.5) {
            $this->category = 'Kurus';
        } elseif ($this->score >= 18.5 && $this->score < 24.9) {
            $this->category = 'Normal';
        } elseif ($this->score >= 25 && $this->score < 29.9) {
            $this->category = 'Gemuk';
        } else {
            $this->category = 'Obesitas';
        }

        return $this->category;
    }
}

<?php
class RelativeFatMass
{
    public float $score = 0;
    public string $category = "";

    public function calculate(float $height, float $waistSize, string $gender): void
    {
        if ($height != 0 || $waistSize != 0) {
            if ($gender === 'm') {
                $this->score = 64 - 20 * ($height / $waistSize);
            } else {
                $this->score = 76 - 20 * ($height / $waistSize);
            }
        }
    }

    public function determineCategory($gender): string
    {
        if ($gender === 'm') {
            if ($this->score >= 2 && $this->score <= 5) {
                $this->category = 'Essential fat';
            } elseif ($this->score >= 6 && $this->score <= 13) {
                $this->category = 'Athletes';
            } elseif ($this->score >= 14 && $this->score <= 17) {
                $this->category = 'Fitness';
            } elseif ($this->score >= 18 && $this->score <= 24) {
                $this->category = 'Average';
            } elseif ($this->score >= 25) {
                $this->category = 'Obese';
            } else {
                $this->category = 'Low Level Fat';
            }
        } else {
            if ($this->score >= 10 && $this->score <= 13) {
                $this->category = 'Essential fat';
            } elseif ($this->score >= 14 && $this->score <= 20) {
                $this->category = 'Athletes';
            } elseif ($this->score >= 21 && $this->score <= 24) {
                $this->category = 'Fitness';
            } elseif ($this->score >= 25 && $this->score <= 31) {
                $this->category = 'Average';
            } elseif ($this->score >= 32) {
                $this->category = 'Obese';
            } else {
                $this->category = 'Low Level Fat';
            }
        }

        return $this->category;
    }
}

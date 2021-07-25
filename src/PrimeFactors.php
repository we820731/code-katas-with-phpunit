<?php

namespace App;

class PrimeFactors
{
    public function generate($number): array
    {
        $factors = [];
        $divisor = 2;

        // Prime Factors Kata
        // 1. Is the number divisible by 2
        // 2. If true, then divide by 2. If false, increase candidate and try again.
        // 3. Repeat.

        while ($number > 1) {
            while ($number % $divisor === 0) {
                $factors[] = $divisor; // [2, 2]

                $number = $number / $divisor;
            }
            $divisor++;
        }
        return $factors;
    }
}
<?php

namespace PrimeFactors;

class PrimeFactors
{

    /**
     * @param int $number
     *
     * @return array
     */
    public static function generate(int $number): array
    {
        $primeFactors = [];

        for ($canditate = 2; $canditate <= $number; $canditate++) {
            while ($number % $canditate === 0) {
                $primeFactors[] = $canditate;
                $number /= $canditate;
            }
        }

        return $primeFactors;
    }
}
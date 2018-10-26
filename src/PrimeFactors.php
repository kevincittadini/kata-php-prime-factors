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

        for ($canditate = 2; $number > 1; $canditate++)
            for (; $number % $canditate === 0; $number /= $canditate)
                $primeFactors[] = $canditate;

        return $primeFactors;
    }
}
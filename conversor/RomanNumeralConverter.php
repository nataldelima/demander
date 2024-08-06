<?php

// criar uma classe para converter algarismos romanos e arabicos e vice-versa
class RomanNumeralConverter
{
    private $romanNumerals = [
        'I' => 1,
        'IV' => 4,
        'V' => 5,
        'IX' => 9,
        'X' => 10,
        'XL' => 40,
        'L' => 50,
        'XC' => 90,
        'C' => 100,
        'CD' => 400,
        'D' => 500,
        'CM' => 900,
        'M' => 1000,
    ];

    public function toRoman($number)
    {
        $result = '';
        $values = array_values($this->romanNumerals);
        $keys = array_keys($this->romanNumerals);

        for ($i = sizeof($values) - 1; $i >= 0; $i--) {
            while ($number >= $values[$i]) {
                $result .= $keys[$i];
                $number -= $values[$i];
            }
        }

        return $result;
    }

    public function toArabic($roman)
    {
        $result = 0;
        $prev = 0;

        for ($i = strlen($roman) - 1; $i >= 0; $i--) {
            $current = $this->romanNumerals[$roman[$i]];
            if ($current < $prev) {
                $result -= $current;
            } else {
                $result += $current;
            }
            $prev = $current;
        }

        return $result;
    }
}

// exemplo de uso
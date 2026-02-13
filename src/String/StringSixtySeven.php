<?php

declare(strict_types=1);

namespace String;

final readonly class StringSixtySeven
{
    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary(string $a, string $b): string
    {
        $carry = 0;
        $result = [];

        for ($i = 0; $i <= max(strlen($a) - 1, strlen($b) - 1); $i++) {
            $first = strlen($a) - 1 - $i >= 0 ? (int)$a[strlen($a) - 1 - $i] : 0;
            $second = strlen($b) - 1 - $i >= 0 ? (int)$b[strlen($b) - 1 - $i] : 0;
            $sum = $first + $second + $carry;

            $result[] = $sum % 2;
            $carry = (int)($sum / 2);
        }

        if ($carry > 0) {
            $result[] = $carry;
        }

        return implode('', array_reverse($result));
    }
}
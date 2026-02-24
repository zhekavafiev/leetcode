<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayTwoOrTwo
{
    /**
     * @param int $n
     * @return bool
     */
    function isHappy(int $n): bool
    {
        $string = (string) $n;
        if ($n === 1) {
            return true;
        }

        $used = [];

        while (true) {
            if (isset($used[$string])) {
                return false;
            }

            $used[$string] = true;

            $sum = 0;

            for ($i = 0; $i < strlen($string); $i++) {
                $sum = $sum + (int) $string[$i] * (int) $string[$i];
            }

            $string = (string) $sum;

            if ($string == 1) {
                return true;
            }
        }

        return false;
    }
}
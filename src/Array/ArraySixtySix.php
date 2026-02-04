<?php

declare(strict_types=1);

namespace Array;

final readonly class ArraySixtySix
{
    /**
     * @param int[] $digits
     *
     * @return int[]
     */
    function plusOne(array $digits): array
    {
        $len = count($digits);
        $inBrain = 0;
        $needAdd = false;
        for ($i = $len - 1; $i >= 0; $i--) {
            if ($i === $len - 1) {
                $digits[$i] = $digits[$i] + 1;
            }

            $digits[$i] = $digits[$i] + $inBrain;

            $inBrain = 0;
            if ($digits[$i] === 10) {
                if ($i === 0) {
                    $needAdd = true;
                }

                $digits[$i] = 0;
                $inBrain++;
            }
        }

        if ($needAdd) {
            array_unshift($digits, 1);
        }

        return $digits;
    }
}
<?php

declare(strict_types=1);

namespace String;

final readonly class StringThreeFortyFour
{
    /**
     * @param String[] $s
     *
     * @return NULL
     */
    function reverseString(array &$s): void
    {
        $len = count($s);

        if ($len === 1) {
            return;
        }

        $middleIndex = floor(count($s) / 2) - 1;

        foreach (range(0, $middleIndex) as $index) {
            $leftIndex = $index;
            $rightIndex = $len - 1 - $index;

            $leftValue = $s[$leftIndex];
            $s[$leftIndex] = $s[$rightIndex];
            $s[$rightIndex] = $leftValue;
        }
    }
}
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

// Пример использования:
$solution = new \String\StringThreeFortyFour();
$s = ["h", "e", "l", "l", "o"];
$solution->reverseString($s);
var_dump($s); // array(5) { [0]=> string(1) "o" [1]=> string(1) "l" [2]=> string(1) "l" [3]=> string(1) "e" [4]=> string(1) "h" }
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

// Пример использования:
$solution = new \Array\ArraySixtySix();
$digits = [1, 2, 9];
$result = $solution->plusOne($digits);
var_dump($result); // array(3) { [0]=> int(1) [1]=> int(3) [2]=> int(0) }

$digits2 = [9, 9, 9];
$result2 = $solution->plusOne($digits2);
var_dump($result2); // array(4) { [0]=> int(1) [1]=> int(0) [2]=> int(0) [3]=> int(0) }
<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayTwoEightyThree
{
    /**
     * @param int[] $nums
     */
    function moveZeroes(array &$nums): void
    {
        for ($pointer1 = 0; $pointer1 < count($nums); $pointer1++) {
            if ($nums[$pointer1] !== 0) {
                continue;
            }

            for ($j = $pointer1 + 1; $j < count($nums); $j++) {
                if ($nums[$j] !== 0) {
                    $pointer2 = $j;
                    break;
                }
            }

            if (!isset($pointer2)) {
                return;
            }

            if ($nums[$pointer1] === 0) {
                $temp = $nums[$pointer2];
                $nums[$pointer2] = $nums[$pointer1];
                $nums[$pointer1] = $temp;
            }
        }
    }
}
<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayThirtyFive
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    function searchInsert(array $nums, int $target): int
    {
        $min = 0;
        $max = count($nums) - 1;

        while ($max >= $min) {
            $mid = (int) floor(($max + $min) / 2);

            if ($nums[$mid] === $target) {
                return $mid;
            }

            if ($nums[$mid] < $target) {
                $min = $mid + 1;
            }

            if ($nums[$mid] > $target) {
                $max = $mid -1;
            }
        }

        return $min;
    }
}

// Пример использования:
$solution = new \Array\ArrayThirtyFive();
$nums = [1, 3, 5, 6];
$target = 5;
$result = $solution->searchInsert($nums, $target);
var_dump($result); // int(2)

$target2 = 2;
$result2 = $solution->searchInsert($nums, $target2);
var_dump($result2); // int(1)
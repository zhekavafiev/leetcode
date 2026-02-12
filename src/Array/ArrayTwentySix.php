<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayTwentySix
{
    /**
     * @param int[] $nums
     *
     * @return int
     */
    function removeDuplicates(array &$nums): int
    {
        $len = count($nums);

        for ($i = 0; $i < $len; $i++) {
            if ($i === $len - 1) {
                break;
            }

            $j = $i + 1;
            if ($nums[$i] === $nums[$j]) {
                unset($nums[$j]);
                for ($k = $j + 1; $k < $len; $k++) {
                    if ($nums[$k] === $nums[$i]) {
                        unset($nums[$k]);
                        $j = $k;
                    } else {
                        break;
                    }
                }
                $i = $j;
            }
        }

        return count($nums);
    }
}

// Пример использования:
$solution = new \Array\ArrayTwentySix();
$nums = [1, 1, 2, 2, 3, 4, 4, 5];
$result = $solution->removeDuplicates($nums);
var_dump($result); // int(5)
var_dump($nums); // массив без дубликатов
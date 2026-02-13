<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayOneTreatySix
{
    /**
     * @param int[] $nums
     * @return int
     */
    function singleNumber(array $nums): int
    {
        $init = 0;

        for ($i=0; $i < count($nums); $i++) {
            $init = $init ^ $nums[$i];
        }

        return $init;
    }
}

// Пример использования:
$solution = new \Array\ArrayOneTreatySix();
$nums = [2, 2, 1];
$result = $solution->singleNumber($nums);
var_dump($result); // int(1)

$nums2 = [4, 1, 2, 1, 2];
$result2 = $solution->singleNumber($nums2);
var_dump($result2); // int(4)
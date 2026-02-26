<?php

declare(strict_types=1);

namespace Array;

class ArrayTwoSixtyEight
{

    /**
     * @param array<int> $nums
     *
     * @return int
     */
    function missingNumber(array $nums): int
    {
        $count = count($nums);

        $map = [];

        for ($i = 0; $i <= $count; $i++) {
            $map[$i] = true;
        }

        for ($i = 0; $i < $count; $i++) {
            if (isset($map[$nums[$i]])) {
                unset($map[$nums[$i]]);
            }
        }

        return array_key_first($map);
    }
}
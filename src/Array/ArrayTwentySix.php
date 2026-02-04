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
<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayTwentySeven
{
    /**
     * @param int[] $nums
     * @param int   $val
     *
     * @return int
     */
    function removeElement(array &$nums, int $val): int
    {
        $len = count($nums);
        $removed = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($i === $len - 1) {
                break;
            }

            if ($nums[$i] === $val) {
                $removed++;
                unset($nums[$i]);
                $nums[] = $val;
            }
        }

        return $len - $removed;
    }
}
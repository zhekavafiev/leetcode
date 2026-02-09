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
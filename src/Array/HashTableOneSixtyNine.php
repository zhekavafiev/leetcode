<?php

declare(strict_types=1);

namespace Array;

final readonly class HashTableOneSixtyNine
{
    /**
     * @param int[] $nums
     * @return int
     */
    function majorityElement(array $nums): int
    {
        $border = floor(count($nums) / 2);

        $map = [];

        for ($i = 0; $i < count($nums); $i++) {
            if (array_key_exists($nums[$i], $map)) {
                $map[$nums[$i]] = $map[$nums[$i]] + 1;

                if ($map[$nums[$i]] > $border) {
                    return $nums[$i];
                }
            } else {
                $map[$nums[$i]] = 1;
            }
        }

        foreach ($map as $key => $count) {
            if ($count > $border) {
                return $key;
            }
        }
    }
}
<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayTwoNineteen
{
    function containsNearbyDuplicate(array $nums, int $k): bool
    {
        $hash = [];
        $i = 0;

        while ($i !== count($nums)) {
            if (! isset($hash[$nums[$i]])) {
                $hash[$nums[$i]] = $i;
                $i++;
                continue;
            }

            $index = $hash[$nums[$i]];

            if (abs($index - $i) <= $k) {
                return true;
            }

            $hash[$nums[$i]] = $i;
            $i++;
        }

        return false;
    }
}
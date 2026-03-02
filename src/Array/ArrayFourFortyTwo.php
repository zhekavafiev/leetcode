<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayFourFortyTwo
{
    /**
     * @param array<int> $s
     * @return array<int>
     */
    function findDuplicates(array $nums): array
    {
        if ($nums === []) {
            return [];
        }

        $result = [];
        sort($nums);

        for ($i = 0; $i < count($nums) - 1; $i++) {
            if ($nums[$i] === $nums[$i + 1]) {
                $result[] = $nums[$i];
            }
        }

        return $result;
    }
}
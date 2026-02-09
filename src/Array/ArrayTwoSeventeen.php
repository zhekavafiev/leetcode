<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayTwoSeventeen
{
    /**
     * @param int[] $nums
     * @return bool
     */
    function containsDuplicate(array $nums): bool
    {
        $map = [];

        for ($i = 0; $i < count($nums); $i++) {
            if (array_key_exists($nums[$i], $map)) {
                return true;
            }

            $map[$nums[$i]] = true;
        }

        return false;
    }
}
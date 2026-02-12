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

// Пример использования:
$solution = new \Array\ArrayTwoSeventeen();
$nums1 = [1, 2, 3, 1];
$result1 = $solution->containsDuplicate($nums1);
var_dump($result1); // bool(true)

$nums2 = [1, 2, 3, 4];
$result2 = $solution->containsDuplicate($nums2);
var_dump($result2); // bool(false)
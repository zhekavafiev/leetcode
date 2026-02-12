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

// Пример использования:
$solution = new \Array\ArrayTwentySeven();
$nums = [3, 2, 2, 3];
$val = 3;
$result = $solution->removeElement($nums, $val);
var_dump($result); // int(2)
var_dump($nums); // array(4) { [1]=> int(2) [2]=> int(2) [3]=> int(3) [4]=> int(3) }
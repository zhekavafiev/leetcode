<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayEightyEight
{
    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     */
    function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        $pointer1 = $m - 1;
        $pointer2 = $n - 1;

        for ($i = count($nums1) - 1; $i >= 0; $i--) {
            if ($pointer1 < 0) {
                $nums1[$i] = $nums2[$pointer2];
                $pointer2--;
                continue;
            }

            if ($pointer2 < 0) {
                $nums1[$i] = $nums1[$pointer1];
                $pointer1--;
                continue;
            }

            if ($nums1[$pointer1] >= $nums2[$pointer2]) {
                $nums1[$i] = $nums1[$pointer1];
                $pointer1--;
                continue;
            }

            if ($nums1[$pointer1] < $nums2[$pointer2]) {
                $nums1[$i] = $nums2[$pointer2];
                $pointer2--;
            }
        }
    }
}
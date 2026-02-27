<?php

declare(strict_types=1);

namespace Array;

class ArrayThreeFortyNine
{

    /**
     * @param int[] $nums1
     * @param int[] $nums2
     * @return int[]
     */
    function intersection(array $nums1, array $nums2): array
    {
        $result = [];
        $map = [];

        if (count($nums1) < count($nums2)) {
            foreach ($nums1 as $el) {
                $map[$el] = true;
            }

            foreach ($nums2 as $el) {
                if (isset($result[$el])) {
                    continue;
                }

                if (! isset($map[$el])) {
                    $result[$el] = true;
                }
            }
        } else {
            foreach ($nums2 as $el) {
                $map[$el] = true;
            }

            foreach ($nums1 as $el) {
                if (isset($result[$el])) {
                    continue;
                }

                if (isset($map[$el])) {
                    $result[$el] = true;
                }
            }
        }

        return array_keys($result);
    }
}
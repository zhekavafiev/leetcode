<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayThreeEightySeven
{
    /**
     * @param string $s
     * @return int
     */
    function firstUniqChar(string $s): int
    {
        $map = [];
        $pointer = 0;
        while ($pointer < strlen($s)) {
            if (isset($map[$s[$pointer]])) {
                $map[$s[$pointer]] = false;
            } else {
                $map[$s[$pointer]] = $pointer;
            }

            $pointer++;
        }

        foreach ($map as $v) {
            if ($v !== false) {
                return $v;
            }
        }

        return -1;
    }
}
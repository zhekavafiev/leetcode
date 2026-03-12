<?php

declare(strict_types=1);

namespace Array;

final readonly class ArrayThreeEightyNine
{
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference(string $s, string $t): string
    {
        $map = [];

        for ($i = 0; $i < strlen($s); ++$i) {
            if (! isset($map[$s[$i]])){
                $map[$s[$i]] = 1;
                continue;
            }

            $map[$s[$i]] += 1;
        }

        for ($i = 0; $i < strlen($t); ++$i) {
            if (! isset($map[$t[$i]]) || $map[$t[$i]] === 0){
                return $t[$i];
            }

            $map[$t[$i]] -= 1;
        }
    }
}
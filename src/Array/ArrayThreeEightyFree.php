<?php

declare(strict_types=1);

namespace Array;

class ArrayThreeEightyFree
{
    /**
     * @param string $ransomNote
     * @param string $magazine
     * @return bool
     */
    function canConstruct(string $ransomNote, string $magazine): bool
    {
        $map = [];

        for ($i = 0; $i < strlen($magazine); $i++) {
            if (! isset($map[$magazine[$i]])) {
                $map[$magazine[$i]] = 1;
            } else {
                $map[$magazine[$i]] += 1;
            }
        }

        for ($i = 0; $i < strlen($ransomNote); $i++) {
            if (! isset($map[$ransomNote[$i]])) {
                return false;
            }

            if ($map[$ransomNote[$i]] === 0) {
                return false;
            }
            $map[$ransomNote[$i]] -= 1;
        }

        return true;
    }
}
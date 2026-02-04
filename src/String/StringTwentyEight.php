<?php

declare(strict_types=1);

namespace String;

final readonly class StringTwentyEight
{
    /**
     * @param String $haystack
     * @param String $needle
     *
     * @return int
     */
    function strStr(string $haystack, string $needle): int
    {
        $result = -1;
        $length = strlen($needle);

        $first = $needle[0];

        for ($i = 0; $i < strlen($haystack); $i++) {
            if ($haystack[$i] === $first) {
                if ($length === 1) {
                    return $i;
                }

                for ($j = 1; $j < $length; $j++) {
                    if ($haystack[$i + $j] !== $needle[$j]) {
                        $result = -1;
                        break;
                    }

                    $result = $i;

                    if ($j === $length - 1) {
                        return $result;
                    }
                }
            }
        }

        return $result;
    }
}
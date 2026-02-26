<?php

declare(strict_types=1);

namespace Array;

class ArrayTwoNinety
{
    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern(string $pattern, string $s): bool
    {
        $words = explode(' ', $s);

        if (count($words) !== strlen($pattern)) {
            return false;
        }

        $used = [];
        $symbols = [];

        for ($i = 0; $i < count($words); $i++) {
            if (! isset($used[$words[$i]])) {
                if (isset($symbols[$pattern[$i]])) {
                    return false;
                }

                $used[$words[$i]] = $pattern[$i];
                $symbols[$pattern[$i]] = true;
                continue;
            }

            if ($pattern[$i] !== $used[$words[$i]]) {
                return false;
            }
        }

        return true;
    }
}
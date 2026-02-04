<?php

declare(strict_types=1);

namespace String;

final readonly class StringNineteenThirtyFive
{
    /**
     * @param string $text
     * @param string $brokenLetters
     *
     * @return int
     */
    function canBeTypedWords(string $text, string $brokenLetters): int
    {
        $brokenMap = [];

        $count = 0;
        $isBroken = false;
        for ($i = 0; $i < strlen($brokenLetters); $i++) {
            $brokenMap[$brokenLetters[$i]] = $brokenLetters[$i];
        }

        for ($i = 0; $i < strlen($text); $i++) {
            if (isset($brokenMap[$text[$i]])) {
                $isBroken = true;
                continue;
            }

            if ($text[$i] === ' ' || strlen($text) - 1 === $i) {
                if (!$isBroken) {
                    $count++;
                }
                $isBroken = false;
            }
        }

        return $count;
    }
}
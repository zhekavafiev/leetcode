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

// Пример использования:
$solution = new \String\StringNineteenThirtyFive();
$text = "hello world";
$brokenLetters = "ad";
$result = $solution->canBeTypedWords($text, $brokenLetters);
var_dump($result); // int(1)

$text2 = "leet code";
$brokenLetters2 = "lt";
$result2 = $solution->canBeTypedWords($text2, $brokenLetters2);
var_dump($result2); // int(1)
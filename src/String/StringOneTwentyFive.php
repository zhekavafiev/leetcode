<?php

declare(strict_types=1);

namespace String;

final readonly class StringOneTwentyFive
{
    /**
     * @param String $s
     *
     * @return bool
     */
    function isPalindrome(string $s): bool
    {
        $s = preg_replace("/[^a-zA-Z0-9\s+]/", '', $s);
        $s = strtolower(str_replace(' ', '', $s));
        $len = strlen($s);

        if ($len === 1) {
            return true;
        }

        $mid = round($len / 2);

        for ($i = 0; $i < $mid; $i++) {
            if ($s[$i] !== $s[$len - 1 - $i]) {
                return false;
            }
        }

        return true;
    }
}

// Пример использования:
$solution = new \String\StringOneTwentyFive();
$s = "A man, a plan, a canal: Panama";
$result = $solution->isPalindrome($s);
var_dump($result); // bool(true)

$s2 = "race a car";
$result2 = $solution->isPalindrome($s2);
var_dump($result2); // bool(false)
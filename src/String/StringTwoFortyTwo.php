<?php

declare(strict_types=1);

namespace String;

final readonly class StringTwoFortyTwo
{
    /**
     * @param string $s
     * @param string $t
     *
     * @return bool
     */
    function isAnagram(string $s, string $t): bool
    {
        $lenS = strlen($s);
        $lenT = strlen($t);

        if ($lenS !== $lenT) {
            return false;
        }

        $maxLen = max(strlen($s), strlen($t));

        $sMap = [];
        $tMap = [];

        for ($i = 0; $i < $maxLen; $i++) {
            if (isset($s[$i])) {
                if (array_key_exists($s[$i], $sMap)) {
                    $sMap[$s[$i]] += 1;
                } else {
                    $sMap[$s[$i]] = 1;
                }
            }

            if (isset($t[$i])) {
                if (array_key_exists($t[$i], $tMap)) {
                    $tMap[$t[$i]] += 1;
                } else {
                    $tMap[$t[$i]] = 1;
                }
            }
        }

        foreach ($sMap as $key => $count) {
            if (!isset($tMap[$key]) || $tMap[$key] !== $count) {
                return false;
            }
        }
        return true;
    }
}

// Пример использования:
$solution = new \String\StringTwoFortyTwo();
$s = "anagram";
$t = "nagaram";
$result = $solution->isAnagram($s, $t);
var_dump($result); // bool(true)

$s2 = "rat";
$t2 = "car";
$result2 = $solution->isAnagram($s2, $t2);
var_dump($result2); // bool(false)
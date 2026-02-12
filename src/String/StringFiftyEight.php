<?php

declare(strict_types=1);

namespace String;

final readonly class StringFiftyEight
{
    /**
     * @param String $s
     *
     * @return int
     */
    function lengthOfLastWord(string $s): int
    {
        $lenght = strlen($s);

        $word = '';
        for ($i = $lenght - 1; $i >= 0; $i--) {
            if ($s[$i] === ' ') {
                continue;
            }

            $word .= $s[$i];

            if ($s[$i - 1] === ' ' || $s[$i - 1] === '') {
                return strlen($word);
            }
        }

        return strlen($word);
    }
}

// Пример использования:
$solution = new \String\StringFiftyEight();
$s = "Hello World";
$result = $solution->lengthOfLastWord($s);
var_dump($result); // int(5)

$s2 = "   fly me   to   the moon  ";
$result2 = $solution->lengthOfLastWord($s2);
var_dump($result2); // int(4)
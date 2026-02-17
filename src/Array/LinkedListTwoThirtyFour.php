<?php

declare(strict_types=1);

namespace Array;

final readonly class LinkedListTwoThirtyFour
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome(ListNode $head): bool
    {
        $stack = [];

        while ($head !== null) {
            $stack[] = $head->val;
            $head = $head->next;
        }

        $len = count($stack);
        for ($i = 0; $i < $len; $i++) {

            if ($i === $len - $i - 1) {
                break;
            }

            $pointer1 = $stack[$i];
            $pointer2 = $stack[$len - $i - 1];

            if ($pointer1 !== $pointer2) {
                return false;
            }
        }

        return true;
    }
}
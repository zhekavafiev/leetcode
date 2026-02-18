<?php

declare(strict_types=1);

namespace Array;

final readonly class LinkedListNineteen
{
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd(ListNode $head, int $n): ListNode
    {
        $previous = null;
        $current = $head;

        while ($current !== null) {
            $tmp = $current->next;
            $current->next = $previous;
            $previous = $current;
            $current = $tmp;
        }

        $count = 0;
        $previousNew = null;
        $currentNew = $previous;

        while ($currentNew !== null) {
            $count++;

            if ($count === $n) {
                $currentNew = $currentNew->next;
                continue;
            }

            $tmp = $currentNew->next;
            $currentNew->next = $previousNew;
            $previousNew = $currentNew;
            $currentNew = $tmp;
        }

        return $previousNew;
    }
}
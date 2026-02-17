<?php

declare(strict_types=1);

namespace Array;

final readonly class LinkedListTwoOrSix
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList(ListNode $head): ListNode
    {
        $map = [];

        while ($head !== null) {
            $map[] = $head;
            $head = $head->next;
        }

        $dummy = new ListNode();
        $tail = $dummy;
        for ($i = count($map) - 1; $i >= 0 ; $i--) {


            $tail->next = $map[$i];
            $tail = $tail->next;

            if ($i === 0) {
                $tail->next = null;
                return $dummy->next;
            }
        }
    }
}
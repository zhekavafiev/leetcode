<?php

declare(strict_types=1);

namespace Array;

final readonly class LinkedListTwentyOne
{
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists(ListNode $list1, ListNode $list2): ListNode
    {
        $dummy = new ListNode();
        $tail = $dummy;

        while ($list1 !== null && $list2 !== null) {
            if ($list1->val > $list2->val) {
                $tail->next = $list2;
                $list2 = $list2->next;
                $tail = $tail->next;
            } else {
                $tail->next = $list1;
                $list1 = $list1->next;
                $tail = $tail->next;
            }
        }

        if ($list1 !== null) {
            $tail->next = $list1;
        } else {
            $tail->next = $list2;
        }

        return $dummy->next;
    }
}
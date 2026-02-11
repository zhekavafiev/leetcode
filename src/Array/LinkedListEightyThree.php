<?php

declare(strict_types=1);

namespace Array;

final readonly class LinkedListEightyThree
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates(ListNode $head): ListNode
    {
        $temp = $head;

        while ($temp->next !== null) {
            if ($temp->next->val === $temp->val) {
                $temp->next = $temp->next->next;
            } else {
                $temp = $temp->next;
            }
        }

        return $head;
    }
}
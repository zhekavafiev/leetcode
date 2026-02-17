<?php

declare(strict_types=1);

namespace Array;

final readonly class LinkedListOneSixty
{
    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode(ListNode $headA, ListNode $headB): ?ListNode
    {
        $pointerA = $headA;
        $pointerB = $headB;

        while ($pointerA !== $pointerB) {
            if ($pointerA === null) {
                $pointerA = $headB;
            } else {
                $pointerA = $pointerA->next;
            }

            if ($pointerB === null) {
                $pointerB = $headA;
            } else {
                $pointerB = $pointerB->next;

            }

        }

        return $pointerA;
    }
}
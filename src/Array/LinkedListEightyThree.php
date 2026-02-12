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

// Пример использования:
$solution = new \Array\LinkedListEightyThree();
$head = \Array\ListNode::createLinkedList([1, 1, 2, 3, 3]);
$result = $solution->deleteDuplicates($head);
var_dump($result); // ListNode объект без дубликатов
// Для вывода значений:
$current = $result;
while ($current !== null) {
    echo $current->val . " ";
    $current = $current->next;
}
// Выведет: 1 2 3
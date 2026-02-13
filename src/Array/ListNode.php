<?php

declare(strict_types=1);

namespace Array;

class ListNode {
    public int $val = 0;
    public ?self $next = null;

    function __construct(int $val = 0, ?self $next = null) {
        $this->val = $val;
        $this->next = $next;
    }

    /**
     * @param array<int> $arr
     * @return ListNode|null
     */
    public static function createLinkedList(array $arr): ?ListNode
    {
        if (empty($arr)) {
            return null;
        }

        $head = new self($arr[0]);
        $current = $head;

        for ($i = 1; $i < count($arr); $i++) {
            $current->next = new self($arr[$i]);
            $current = $current->next;
        }

        return $head;
    }
}

// Пример использования:
$head = \Array\ListNode::createLinkedList([1, 2, 3, 4, 5]);
var_dump($head); // ListNode объект
// Для вывода всех значений:
$current = $head;
while ($current !== null) {
    echo $current->val . " ";
    $current = $current->next;
}
// Выведет: 1 2 3 4 5
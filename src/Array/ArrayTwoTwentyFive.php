<?php

declare(strict_types=1);

namespace Array;

class ArrayTwoTwentyFive {
    private array $stack = [];

    /**
     * @param int $x
     * @return null
     */
    function push(int $x): void
    {
        $this->stack[] = $x;
    }

    /**
     * @return Integer
     */
    function pop(): int
    {
        $number = count($this->stack) - 1;

        $response = $this->stack[$number];

        unset($this->stack[$number]);

        $this->stack = array_values($this->stack);

        return $response;
    }

    /**
     * @return Integer
     */
    function top(): int
    {
        $number = count($this->stack) - 1;
        return $this->stack[$number];
    }

    /**
     * @return Boolean
     */
    function empty(): bool
    {
        return $this->stack === [];
    }
}
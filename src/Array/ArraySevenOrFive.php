<?php

declare(strict_types=1);

namespace Array;

final class ArraySevenOrFive
{
    public array $hash = [];

    function add(int $key): void
    {
        if (isset($this->hash[$key])) {
            return;
        }

        $this->hash[$key] = true;
    }

    function remove(int $key): void
    {
        if (! isset($this->hash[$key])) {
            return;
        }

        unset($this->hash[$key]);
    }

    function contains(int $key): bool
    {
        return ! isset($this->hash[$key]);
    }
}
<?php

class Collection
{
    protected $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }
}

$collection = new Collection([1, 2, 41, 60]);

echo count($collection);
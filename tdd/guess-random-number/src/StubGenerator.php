<?php

namespace Kata;

class StubGenerator
{
    public function __construct(
        private readonly int $number
    )
    {
    }

    public function getNumber(): int
    {
        return $this->number;
    }
}

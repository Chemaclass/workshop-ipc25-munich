<?php

declare(strict_types=1);

namespace Kata;

final class StubGenerator
{
    
    public int $number;
    
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    
}

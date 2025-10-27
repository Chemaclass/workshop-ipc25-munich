<?php

declare(strict_types=1);

namespace Kata;

final class ChangeMe
{
    public function game(int $number): bool
    {
        if($number === 5)
        {
            return true;
        }
        
        return false;
    }


}

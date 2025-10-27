<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumberGame
{
    public function game(int $number): string
    {
        if($number < 5)
        {
            return 'lower';
        }

        if($number > 5)
        {
            return 'higher';
        }

        if($number === 5)
        {
            return 'even';
        }

        return '';
    }


}

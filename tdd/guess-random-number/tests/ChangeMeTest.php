<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    public function test_number_five()
    {
        $changeMe = new ChangeMe();

        self::assertTrue($changeMe->game(5));
    }

    public function test_number_one()
    {
        $changeMe = new ChangeMe();

        self::assertFalse($changeMe->game(1));
    }
}

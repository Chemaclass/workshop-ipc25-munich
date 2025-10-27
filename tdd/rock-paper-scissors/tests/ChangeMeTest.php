<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    public function test_change_me(): void
    {
        $changeMe = new ChangeMe();

        self::assertTrue($changeMe->changeMe());
    }

    public function test_items(): void
    {
        $changeMe = new ChangeMe();
        self::assertIsArray($changeMe->getItems());
    }

    public function test_items_contains(): void
    {
        $changeMe = new ChangeMe();
        self::assertTrue(in_array('scissors', $changeMe->getItems()));
        self::assertTrue(in_array('paper', $changeMe->getItems()));
        self::assertTrue(in_array('rock', $changeMe->getItems()));
    }

}

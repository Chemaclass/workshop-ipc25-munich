<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RPSGame;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    public function test_items(): void
    {
        $changeMe = new RPSGame();
        self::assertIsArray($changeMe->getItems());
    }

    #[DataProvider('itemsProvider')]
    public function test_items_contains($items): void
    {
        $changeMe = new RPSGame();
        self::assertTrue(in_array($items, $changeMe->getItems()));
    }

    public static function itemsProvider(): array
    {
        return [
            ['scissors'],
            ['paper'],
            ['rock'],
        ];
    }

}

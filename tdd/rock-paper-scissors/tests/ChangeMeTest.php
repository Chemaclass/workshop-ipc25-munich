<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RPSGame;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{

    public function test_play_rock_rock(): void
    {
        $game = new RPSGame();
        self::assertEquals('draw', $game->play('rock', 'rock'));
    }

    public function test_play_paper_paper(): void
    {
        $game = new RPSGame();
        self::assertEquals('draw', $game->play('paper', 'paper'));
    }

    public function test_play_scissors_scissors(): void
    {
        $game = new RPSGame();
        self::assertEquals('draw', $game->play('scissors', 'scissors'));
    }
}

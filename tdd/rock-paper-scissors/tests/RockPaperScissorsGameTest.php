<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsGameTest extends TestCase
{

    public function test_compare_hands_with_rock_and_scissors(): void
    {
        $changeMe = new RockPaperScissorsGame();
        $result = $changeMe->play('rock', 'scissors');
        self::assertEquals('Player 1', $result);
    }

    public function test_compare_hands_with_scissors_and_rock(): void
    {
        $changeMe = new RockPaperScissorsGame();
        $result = $changeMe->play('scissors', 'rock');
        self::assertEquals('Player 2', $result);
    }

    public function test_compare_hands_with_paper_and_rock(): void
    {
        $changeMe = new RockPaperScissorsGame();
        $result = $changeMe->play('paper', 'rock');
        self::assertEquals('Player 1', $result);
    }

    public function test_compare_hands_with_rock_and_paper(): void
    {
        $changeMe = new RockPaperScissorsGame();
        $result = $changeMe->play('rock', 'paper');
        self::assertEquals('Player 2', $result);
    }


    public function test_compare_hands_with_scissors_and_paper(): void
    {
        $changeMe = new RockPaperScissorsGame();
        $result = $changeMe->play('scissors', 'paper');
        self::assertEquals('Player 1', $result);
    }

    public function test_compare_hands_with_paper_and_scissors(): void
    {
        $changeMe = new RockPaperScissorsGame();
        $result = $changeMe->play('paper', 'scissors');
        self::assertEquals('Player 1', $result);
    }

}

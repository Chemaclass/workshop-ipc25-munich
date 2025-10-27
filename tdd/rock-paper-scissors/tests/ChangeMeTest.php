<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    public function test_rock_bet_scissors(): void
    {
        $kata = new Kata();

        self::assertTrue($kata->player1Wins('rock', 'scissors'));
    }


    public function test_scissors_bet_rock(): void
    {
        $kata = new Kata();

        self::assertFalse($kata->player1Wins('scissors', 'rock'));
    }

    public function test_paper_bet_rock(): void
    {
        $kata = new Kata();

        self::assertTrue($kata->player1Wins('paper', 'rock'));
    }
}

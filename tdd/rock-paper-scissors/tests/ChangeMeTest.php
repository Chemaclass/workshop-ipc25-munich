<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    public function test_rock_vs_scissors(): void
    {
        $kata = new Kata();

        self::assertTrue($kata->playerWins('rock', 'scissors') === Kata::WIN);
    }


    public function test_scissors_vs_rock(): void
    {
        $kata = new Kata();

        self::assertFalse($kata->playerWins('scissors', 'rock') === Kata::WIN);
    }

    public function test_paper_vs_rock(): void
    {
        $kata = new Kata();

        self::assertTrue($kata->playerWins('paper', 'rock') === Kata::WIN);
    }

    public function test_rock_vs_paper(): void
    {
        $kata = new Kata();

        self::assertFalse($kata->playerWins('rock', 'paper') === Kata::WIN);
    }

    public function test_scissors_vs_paper(): void
    {
        $kata = new Kata();

        self::assertTrue($kata->playerWins('scissors', 'paper') === Kata::WIN);
    }

    public function test_paper_vs_scissors(): void
    {
        $kata = new Kata();

        self::assertFalse($kata->playerWins('paper', 'scissors') === Kata::WIN);
    }

    public function test_paper_vs_paper(): void
    {
        $kata = new Kata();

        self::assertTrue($kata->playerWins('paper', 'paper') === Kata::DRAW);
    }


}

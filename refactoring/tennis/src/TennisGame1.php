<?php

declare(strict_types=1);

namespace TennisGame;

class TennisGame1 implements TennisGame
{
    private int $player1Score = 0;

    private int $player2Score = 0;

    public function __construct(
        private readonly string $player1Name,
        private readonly string $player2Name
    ) {
    }

    public function wonPoint(string $playerName): void
    {
        match ($playerName) {
            $this->player1Name => $this->player1Score++,
            $this->player2Name => $this->player2Score++,
            default => throw new \InvalidArgumentException('Invalid player name'),
        };
    }

    public function getScore(): string
    {
        if ($this->player1Score === $this->player2Score) {
            return $this->getDrawResult();
        }
        if ($this->player1Score >= 4 || $this->player2Score >= 4) {
            return $this->getMinusResult();
        }
        return $this->getScoreWord();
    }

    private function getDrawResult(): string
    {
        return match ($this->player1Score) {
            0 => 'Love-All',
            1 => 'Fifteen-All',
            2 => 'Thirty-All',
            default => 'Deuce',
        };
    }

    private function getMinusResult(): string
    {
        $minusResult = $this->player1Score - $this->player2Score;

        if ($minusResult === 1) {
            return $this->getAdvantageResult($this->player1Name);
        }

        if ($minusResult === -1) {
            return $this->getAdvantageResult($this->player2Name);
        }

        if ($minusResult >= 2) {
            return $this->getWinResult($this->player1Name);
        }

        return $this->getWinResult($this->player2Name); 
    }

    private function getAdvantageResult($playerName): string
    {
        return sprintf("Advantage %s", $playerName);
    }

    private function getWinResult($playerName): string {
        return sprintf("Win for %s", $playerName);
    }

    private function getScoreWord(): string
    {
        return sprintf(
            "%s-%s",
            $this->getTempScoreWord($this->player1Score),
            $this->getTempScoreWord($this->player2Score)
        );
    }

    private function getTempScoreWord(int $playerScore): string {
        return match ($playerScore) {
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty',
        };
    }
}

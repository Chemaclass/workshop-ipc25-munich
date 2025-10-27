<?php

declare(strict_types=1);

namespace TennisGame;

class TennisGame1 implements TennisGame
{
    private int $player1Score = 0;

    private int $player2Score = 0;

    public function __construct(
        private string $player1Name,
        private string $player2Name
    ) {
    }

    public function wonPoint(string $playerName): void
    {
        if ($playerName === $this->player1Name) {
            $this->player1Score++;
        } else {
            $this->player2Score++;
        }
    }

    public function getScore(): string
    {
        if ($this->player1Score === $this->player2Score) {
            return $this->player1Score > 2
              ? 'Deuce'
              : ($this->getScoreByName($this->player1Score) . '-All');
        } elseif ($this->player1Score >= 4 || $this->player2Score >= 4) {
            if ($this->player1Score > ($this->player2Score + 1)) {
              return 'Win for player1';
            }
            if ($this->player2Score > ($this->player1Score + 1)) {
              return 'Win for player2';
            }
            if ($this->player1Score > $this->player2Score) {
              return 'Advantage player1';
            }

            return 'Advantage player2';
        } else {
            return $this->getScoreByName($this->player1Score) . '-' . $this->getScoreByName($this->player2Score);
        }
    }

    public function getScoreByName(int $score): string
    {
        switch ($score) {
            case 0:
                return 'Love';
            case 1:
                return 'Fifteen';
            case 2:
                return 'Thirty';
            case 3:
                return 'Forty';
            default:
                return '';
        }
    }
}

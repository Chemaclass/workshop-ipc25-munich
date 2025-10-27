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
        } else if ($playerName === $this->player2Name) {
            $this->player2Score++;
        } else {
            throw new \InvalidArgumentException('Invalid player name');
        }
    }

    public function getScore(): string
    {
        if ($this->player1Score === $this->player2Score) {
            return $this->draw();
        }
        if ($this->player1Score >= 4 || $this->player2Score >= 4) {
            return $this->getMinusResult();
        }
        return $this->getScoreWord();
    }

    private function draw(): string
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
            return 'Advantage player1';
        }

        if ($minusResult === -1) {
            return 'Advantage player2';
        }

        if ($minusResult >= 2) {
            return 'Win for player1';
        }

        return 'Win for player2';
    }

    private function getScoreWord(): string
    {
        $score = '';
        for ($i = 1; $i < 3; $i++) {

            if ($i === 1) {
                $tempScore = $this->player1Score;
            } else {
                $score     .= '-';
                $tempScore = $this->player2Score;
            }

            $tempScoreWord = match ($tempScore) {
                0 => 'Love',
                1 => 'Fifteen',
                2 => 'Thirty',
                3 => 'Forty',
            };
            $score         .= $tempScoreWord;
        }
        return $score;
    }

}

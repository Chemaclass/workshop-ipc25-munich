<?php

declare(strict_types=1);

namespace TennisGame;

class TennisGame1 implements TennisGame
{
    private int $m_score1 = 0;

    private int $m_score2 = 0;

    public function __construct(
        private string $player1Name,
        private string $player2Name
    ) {
    }

    public function wonPoint(string $playerName): void
    {
        if ($playerName === 'player1') {
            $this->m_score1++;
        } else {
            $this->m_score2++;
        }
    }

    public function getScore(): string
    {
        $score = '';
        if ($this->m_score1 === $this->m_score2) {
            $score = $this->draw();
        } elseif ($this->m_score1 >= 4 || $this->m_score2 >= 4) {
            $score = $this->getMinusResult();
        } else {
            for ($i = 1; $i < 3; $i++) {
                $score = $this->getScoreWord($i, $score);
            }
        }
        return $score;
    }

    private function draw(): string
    {
        return match ($this->m_score1) {
            0 => 'Love-All',
            1 => 'Fifteen-All',
            2 => 'Thirty-All',
            default => 'Deuce',
        };
    }

    private function getMinusResult(): string
    {
        $minusResult = $this->m_score1 - $this->m_score2;

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

    private function getScoreWord(int $i, string $score): string
    {
        if ($i === 1) {
            $tempScore = $this->m_score1;
        } else {
            $score     .= '-';
            $tempScore = $this->m_score2;
        }

        $tempScoreWord = match ($tempScore) {
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty',
        };

        return $score . $tempScoreWord;
    }

}

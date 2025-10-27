<?php

declare(strict_types=1);

namespace TennisGame;


class TennisGame1 implements TennisGame
{
    private int $playerOneScore = 0;

    private int $playerTwoScore = 0;

    public function __construct(
        private string $player1Name,
        private string $player2Name
    ) {
    }

    public function wonPoint(string $playerName): void
    {
        if ($playerName === $this->player1Name) {
            $this->playerOneScore++;
        } elseif ($playerName === $this->player2Name) {
            $this->playerTwoScore++;
        } else {
            throw new \Exception('No player');
        }
    }

    public function getScore(): string
    {
  
        if ($this->playerOneScore === $this->playerTwoScore) {
            return $this->tie($this->playerOneScore);
        } 
        if ($this->playerOneScore >= 4 || $this->playerTwoScore >= 4) {
            return $this->advantageOrWin();
        } 

        return sprintf(
            '%s-%s', 
            $this->getPlayerScore($this->playerOneScore),
            $this->getPlayerScore($this->playerTwoScore)
        );
        

    }

    private function tie($score): string {
        return match ($score) {
                0 => 'Love-All',
                1 => 'Fifteen-All',
                2 => 'Thirty-All',
                default => 'Deuce',
        };
    }

    private function advantageOrWin(): string {
        $minusResult = $this->playerOneScore - $this->playerTwoScore;
            if ($minusResult >= 1) {
                $score = sprintf($minusResult === 1 ? 'Advantage %s' : 'Win for %s', $this->player1Name);
            } else {
                $score = sprintf($minusResult === -1 ? 'Advantage %s' : 'Win for %s', $this->player2Name);
            }
            return $score;
    }

    private function getPlayerScore(int $score): string 
    {
        return match ($score) {
                0 => 'Love',
                1 => 'Fifteen',
                2 => 'Thirty',
                3 => 'Forty',
        };
    }

}

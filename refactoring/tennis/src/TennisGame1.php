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
        $score = '';
        if ($this->playerOneScore === $this->playerTwoScore) {
            return match ($this->playerOneScore) {
                0 => 'Love-All',
                1 => 'Fifteen-All',
                2 => 'Thirty-All',
                default => 'Deuce',
            };
        } elseif ($this->playerOneScore >= 4 || $this->playerTwoScore >= 4) {
            $minusResult = $this->playerOneScore - $this->playerTwoScore;
            if ($minusResult >= 1) {
                $score = sprintf($minusResult === 1 ? 'Advantage %s' : 'Win for %s', $this->player1Name);
            } else {
                $score = sprintf($minusResult === -1 ? 'Advantage %s' : 'Win for %s', $this->player2Name);
            }
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i === 1) {
                    $tempScore = $this->playerOneScore;
                } else {
                    $score .= '-';
                    $tempScore = $this->playerTwoScore;
                }
                switch ($tempScore) {
                    case 0:
                        $score .= 'Love';
                        break;
                    case 1:
                        $score .= 'Fifteen';
                        break;
                    case 2:
                        $score .= 'Thirty';
                        break;
                    case 3:
                        $score .= 'Forty';
                        break;
                    default:
                        break;
                }
            }
        }
        return $score;
    }
}

<?php

declare(strict_types=1);

namespace TennisGame;

class TennisGame1 implements TennisGame
{
    private int $scorePlayer1 = 0;

    private int $scorePlayer2 = 0;

    public function __construct(
        private readonly string $player1Name,
        private readonly string $player2Name
    ) {
    }

    public function wonPoint(string $playerName): void
    {
        if($playerName === $this->player1Name) {
            $this->scorePlayer1++;
        } else {
            $this->scorePlayer2++;
        }
    }

    public function getScore(): string
    {
        if($this->isTie()) {
            return $this->getStandingNameSamePoint();
        } elseif($this->isAdvantage()) {
            return $this->getStandingNameAdvantage();
        }
        return $this->getStandingNameRegular();
    }

    public function getStandingNameSamePoint(): string
    {
        return match ($this->scorePlayer1) {
            0 => 'Love-All',
            1 => 'Fifteen-All',
            2 => 'Thirty-All',
            default => 'Deuce',
        };
    }

    /**
     * @return string
     */
    private function getStandingNameAdvantage(): string
    {
        $minusResult = $this->scorePlayer1 - $this->scorePlayer2;
        if($minusResult === 1) {
            return $this->getAdvantageName($this->player1Name);
        } elseif($minusResult === -1) {
            return $this->getAdvantageName($this->player2Name);
        } elseif($minusResult >= 2) {
            return $this->getWinName($this->player1Name);
        } else {
            return $this->getWinName($this->player2Name);
        }
    }

    private function getAdvantageName(string $playerName): string
    {
        return "Advantage " . $playerName;
    }

    private function getWinName(string $playerName): string
    {
        return "Win for " . $playerName;
    }

    /**
     * @return string
     */
    private function getStandingNameRegular(): string
    {
        return $this->getScoreText($this->scorePlayer1) . "-" .$this->getScoreText($this->scorePlayer2);
    }

    /**
     * @return bool
     */
    private function isTie(): bool
    {
        return $this->scorePlayer1 === $this->scorePlayer2;
    }

    /**
     * @return bool
     */
    private function isAdvantage(): bool
    {
        return $this->scorePlayer1 >= 4 || $this->scorePlayer2 >= 4;
    }

    /**
     * @param int $tempScore
     * @param string $score
     * @return string
     */
    private function getScoreText(int $tempScore): string
    {
        switch($tempScore) {
            case 0:
                return 'Love';
            case 1:
                return 'Fifteen';
            case 2:
                return 'Thirty';
            case 3:
                return 'Forty';
        }
    }
}

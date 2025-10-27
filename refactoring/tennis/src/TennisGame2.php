<?php

declare(strict_types=1);

namespace TennisGame;

class TennisGame2 implements TennisGame
{
    private int $player1Score = 0;

    private int $player2Score = 0;

    private string $player1Result = '';

    private string $player2Result = '';

    public function __construct(
        private string $player1Name,
        private string $player2Name
    ) {
    }

    public function getScore(): string
    {
        $score = '';
        if ($this->player1Score === $this->player2Score && $this->player1Score < 4) {
            if ($this->player1Score === 0) {
                $score = 'Love';
            }
            if ($this->player1Score === 1) {
                $score = 'Fifteen';
            }
            if ($this->player1Score === 2) {
                $score = 'Thirty';
            }
            $score .= '-All';
        }

        if ($this->player1Score === $this->player2Score && $this->player1Score >= 3) {
            $score = 'Deuce';
        }

        if ($this->player1Score > 0 && $this->player2Score === 0) {
            if ($this->player1Score === 1) {
                $this->player1Result = 'Fifteen';
            }
            if ($this->player1Score === 2) {
                $this->player1Result = 'Thirty';
            }
            if ($this->player1Score === 3) {
                $this->player1Result = 'Forty';
            }

            $this->player2Result = 'Love';
            $score = "{$this->player1Result}-{$this->player2Result}";
        }

        if ($this->player2Score > 0 && $this->player1Score === 0) {
            if ($this->player2Score === 1) {
                $this->player2Result = 'Fifteen';
            }
            if ($this->player2Score === 2) {
                $this->player2Result = 'Thirty';
            }
            if ($this->player2Score === 3) {
                $this->player2Result = 'Forty';
            }
            $this->player1Result = 'Love';
            $score = "{$this->player1Result}-{$this->player2Result}";
        }

        if ($this->player1Score > $this->player2Score && $this->player1Score < 4) {
            if ($this->player1Score === 2) {
                $this->player1Result = 'Thirty';
            }
            if ($this->player1Score === 3) {
                $this->player1Result = 'Forty';
            }
            if ($this->player2Score === 1) {
                $this->player2Result = 'Fifteen';
            }
            if ($this->player2Score === 2) {
                $this->player2Result = 'Thirty';
            }
            $score = "{$this->player1Result}-{$this->player2Result}";
        }

        if ($this->player2Score > $this->player1Score && $this->player2Score < 4) {
            if ($this->player2Score === 2) {
                $this->player2Result = 'Thirty';
            }
            if ($this->player2Score === 3) {
                $this->player2Result = 'Forty';
            }
            if ($this->player1Score === 1) {
                $this->player1Result = 'Fifteen';
            }
            if ($this->player1Score === 2) {
                $this->player1Result = 'Thirty';
            }
            $score = "{$this->player1Result}-{$this->player2Result}";
        }

        if ($this->player1Score > $this->player2Score && $this->player2Score >= 3) {
            $score = "Advantage {$this->player1Name}";
        }

        if ($this->player2Score > $this->player1Score && $this->player1Score >= 3) {
            $score = "Advantage {$this->player2Name}";
        }

        if ($this->player1Score >= 4 && $this->player2Score >= 0 && ($this->player1Score - $this->player2Score) >= 2) {
            $score = "Win for {$this->player1Name}";
        }

        if ($this->player2Score >= 4 && $this->player1Score >= 0 && ($this->player2Score - $this->player1Score) >= 2) {
            $score = "Win for {$this->player2Name}";
        }

        return $score;
    }

    public function wonPoint(string $player): void
    {
        if ($player === $this->player1Name) {
            $this->increasePlayer1Score();
        } else {
            $this->increasePlayer2Score();
        }
    }

    private function increasePlayer1Score(): void
    {
        $this->player1Score++;
    }

    private function increasePlayer2Score(): void
    {
        $this->player2Score++;
    }
}

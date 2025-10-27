<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissor
{
    public const string PLAYER_WINS = 'player wins';
    public const string OPPONENT_WINS = 'opponent wins';
    public const string ROCK = 'rock';
    public const string PAPER = 'paper';
    public const string SCISSORS = 'scissors';
    public function playHands(string $playerHand, string $opponentHand): string
    {
        if ($playerHand === self::PAPER && $opponentHand === self::ROCK) {
            return self::PLAYER_WINS;
        }
        if ($playerHand === self::ROCK && $opponentHand === self::SCISSORS) {
            return self::PLAYER_WINS;
        }
        if ($playerHand === self::SCISSORS && $opponentHand === self::PAPER) {
            return self::PLAYER_WINS;
        }

        return self::OPPONENT_WINS;
    }
}

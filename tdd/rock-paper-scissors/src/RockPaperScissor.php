<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissor
{
    public const string PLAYER_WINS = 'player wins';
    public const string OPPONENT_WINS = 'opponent wins';
    public function playHands(string $playerHand, string $opponentHand): string
    {
        if ($playerHand === 'rock' && $opponentHand === 'scissors') {
            return self::PLAYER_WINS;
        }
        return self::OPPONENT_WINS;
    }
}

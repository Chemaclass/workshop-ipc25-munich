<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissor
{
    public function playHands(string $playerHand, string $opponentHand): bool
    {
        if ($playerHand === 'rock' && $opponentHand === 'scissors') {
            return true;
        }
        return false;
    }
}

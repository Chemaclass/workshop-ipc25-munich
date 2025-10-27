<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{

    public function testChooseRockAgainstScissors(): void
    {
        $changeMe = new ChangeMe();
        $this->assertTrue($changeMe->changeMe('rock'));
    }
}

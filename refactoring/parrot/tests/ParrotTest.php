<?php

declare(strict_types=1);

namespace ParrotTests;

use Parrot\Parrot;
use Parrot\AfricanParrot;
use Parrot\EuropeanParrot;
use Parrot\ParrotTypeEnum;
use PHPUnit\Framework\TestCase;
use Parrot\NorwegianBlueParrot;
use Parrot\UnknownParrot;
use Parrot\UnkownParrotException;

class ParrotTest extends TestCase
{
    public function testSpeedOfEuropeanParrot(): void
    {
        $parrot = new EuropeanParrot(0, 0, false);
        self::assertSame(12.0, $parrot->getSpeed());
    }

    public function testSpeedOfAfricanParrotWithOneCoconut(): void
    {
        $parrot = new AfricanParrot(1, 0, false);
        self::assertSame(3.0, $parrot->getSpeed());
    }

    public function testSpeedOfAfricanParrotWithTwoCoconuts(): void
    {
        $parrot = new AfricanParrot(2, 0, false);
        self::assertSame(0.0, $parrot->getSpeed());
    }

    public function testSpeedOfAfricanParrotWithNoCoconuts(): void
    {
        $parrot = new AfricanParrot(0, 0, false);
        self::assertSame(12.0, $parrot->getSpeed());
    }

    public function testSpeedNorwegianBlueParrotNailed(): void
    {
        $parrot = new NorwegianBlueParrot( 0, 1.5, true);
        self::assertSame(0.0, $parrot->getSpeed());
    }

    public function testSpeedNorwegianBlueParrotNotNailed(): void
    {
        $parrot = new NorwegianBlueParrot(0, 1.5, false);
        self::assertSame(18.0, $parrot->getSpeed());
    }

    public function testSpeedNorwegianBlueParrotNotNailedHighVoltage(): void
    {
        $parrot = new NorwegianBlueParrot(0, 4, false);
        self::assertSame(24.0, $parrot->getSpeed());
    }

    public function testAnUnknownParrotWillWillThrownAnException(): void
    {
        $this->expectException(UnkownParrotException::class);
        $unknownParrot = new UnknownParrot(0, 0, false);
        $unknownParrot->getSpeed();
    }

    public function testGetCryOfEuropeanParrot(): void
    {
        $parrot = new EuropeanParrot(0, 0, false);
        self::assertSame('Sqoork!', $parrot->getCry());
    }

    public function testGetCryOfAfricanParrot(): void
    {
        $parrot = new AfricanParrot(1, 0, false);
        self::assertSame('Sqaark!', $parrot->getCry());
    }

    public function testGetCryOfNorwegianBlueHighVoltage(): void
    {
        $parrot = new NorwegianBlueParrot(0, 4, false);
        self::assertSame('Bzzzzzz', $parrot->getCry());
    }

    public function testGetCryOfNorwegianBlueNoVoltage(): void
    {
        $parrot = new NorwegianBlueParrot(0, 0, false);
        self::assertSame('...', $parrot->getCry());
    }
}

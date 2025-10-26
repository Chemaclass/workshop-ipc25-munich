# Rock Paper Scissors TDD Kata

Practice Test-Driven Development by building a rock-paper-scissors game. Define rules and logic clearly with tests, covering all outcomes efficiently using parameterized tests.

## Quick Start

### Using Docker (Recommended)

```bash
# From the rock-paper-scissors directory
docker-compose up
```

This will automatically install dependencies and run the test suite. The container will exit after tests complete.

See [Installation](#installation) section below for more details on how to run individual commands.

---

## Installation

### Option 1: Using Docker (Recommended)

Run the project in a Docker container with zero PHP setup required.

#### Run Tests Once

To run the complete test suite automatically:

```bash
docker-compose up
```

This will install dependencies and run all tests. The container exits after completion.

#### Run Individual Commands

To keep the container running and execute commands repeatedly, use the `-d` flag:

```bash
# Start the container in the background
docker-compose up -d

# Run tests
docker-compose exec rock-paper-scissors-tdd composer test

# Stop the container when done
docker-compose down
```

### Option 2: Local PHP Setup

Requires:

- PHP 8.3+
- Composer

Install dependencies and run tests:

```bash
composer install
composer test
```

---

## About This Kata

### Business Rules

#### Rock Beats Scissors

As a player, I want rock to beat scissors.

**Scenarios:**
- Given I have chosen rock, when the opponent chooses scissors, then I should win
- Given I have chosen scissors, when the opponent chooses rock, then the opponent should win

#### Paper Beats Rock

As a player, I want paper to beat rock.

**Scenarios:**
- Given I have chosen paper, when the opponent chooses rock, then I should win
- Given I have chosen rock, when the opponent chooses paper, then the opponent should win

#### Scissors Beats Paper

As a player, I want scissors to beat paper.

**Scenarios:**
- Given I have chosen scissors, when the opponent chooses paper, then I should win
- Given I have chosen paper, when the opponent chooses scissors, then the opponent should win

#### Same Moves Result in Draw

As a player, I want the same moves to draw.

**Scenarios:**
- Given I have chosen rock, when the opponent chooses rock, then it should be a draw
- Given I have chosen scissors, when the opponent chooses scissors, then it should be a draw
- Given I have chosen paper, when the opponent chooses paper, then it should be a draw

---

> Original: https://hackmd.io/@evalverde/ipc-remote-kata-1

# Rock Paper Scissors TDD Kata

Practice Test-Driven Development by building a rock-paper-scissors game. Define rules and logic clearly with tests, covering all outcomes efficiently using parameterized tests.

## Quick Start

### Using Docker (Recommended)

```bash
# From the rock-paper-scissors directory
docker-compose up
```

Then in another terminal:

```bash
# Run tests
docker-compose exec rock-paper-scissors-tdd composer test
```

See [Installation](#installation) section below for more details and other commands.

---

## Installation

### Option 1: Using Docker (Recommended)

Run the project in a Docker container with zero PHP setup required:

```bash
docker-compose up
```

The container will automatically install dependencies and run the tests. It will stay running, allowing you to execute commands inside it.

#### Run Commands in Docker

Once `docker-compose up` is running, open another terminal and execute:

```bash
# Run tests
docker-compose exec rock-paper-scissors-tdd composer test

# Or use the container name directly
docker exec ipc25-rps composer test
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

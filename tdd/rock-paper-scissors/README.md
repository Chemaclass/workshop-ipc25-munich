# Rock Paper Scissors TDD Kata

We are creating a rock-paper-scissors game using Test-Driven Development (TDD).

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
# From the rock-paper-scissors directory
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

## Rock Beats Scissors

### Business needs / User story

```
As a player
I want rock to beat scissors
````

#### Solution

```
Given I have chosen rock
When the opponent chooses scissors
Then I should win
```

```
Given I have chosen scissors
When the opponent chooses rock
Then the opponent win
```

## Paper Beats Rock

### Business needs / User story

```
As a player
I want paper to beat rock
```

#### Solution

```
Given I have chosen paper
When the opponent chooses rock
Then I should win
```

```
Given I have chosen rock
When the opponent chooses paper
Then the opponent should win
```

## Scissors Beats Paper

### Business needs / User story

```
As a player
I want scissors to beat paper
```

#### Solution

```
Given I have chosen scissors
When the opponent chooses paper
Then I should win
```

```
Given I have chosen paper
When the opponent chooses scissors
Then the opponent should win
```

## Same Moves Result in Draw

### Business need / User story

```
As a player
I want the same moves to draw
```

#### Solution

```
Given I have chosen rock
When the opponent chooses rock
Then it should be a draw
```

```
Given I have chosen scissors
When the opponent chooses scissors
Then it should be a draw
```

```
Given I have chosen paper
When the opponent chooses paper
Then it should be a draw
```

---

Original: https://hackmd.io/@evalverde/ipc-remote-kata-1

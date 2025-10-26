# Tennis Refactoring Kata

Refactor complex conditional-heavy logic safely. Practice improving readability with meaningful names and abstractions while eliminating duplication. Several versions are provided, each with different design challenges.

## Quick Start

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
docker-compose exec tennis-refactoring composer test

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

### The Scenario

Imagine you work for a consultancy company, and one of your colleagues has been doing some work for the Tennis Society. The contract is for 10 hours billable work, and your colleague has spent 8.5 hours working on it. Unfortunately he has now fallen ill. He says he has completed the work, and the tests all pass. Your boss has asked you to take over from him. She wants you to spend an hour or so on the code so she can bill the client for the full 10 hours. She instructs you to tidy up the code a little and perhaps make some notes so you can give your colleague some feedback on his chosen design. You should also prepare to talk to your boss about the value of this refactoring work, over and above the extra billable hours.

### How to Approach

- Start with `TennisGame1` class
- The test suite is fairly comprehensive and runs quickly
- You should not need to change the tests, only run them often as you refactor
- Note: The player names are hard-coded to "player1" and "player2" in several implementations—you may want to fix this and add suitable test cases

---

> Original: https://github.com/emilybache/Tennis-Refactoring-Kata

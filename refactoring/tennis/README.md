# Tennis Refactoring Kata

Refactor complex conditional-heavy logic safely. Practice improving readability with meaningful names and abstractions while eliminating duplication. Several versions are provided, each with different design challenges.

## Quick Start

### Using Docker (Recommended)

```bash
# From the tennis directory
docker-compose up
```

Then in another terminal:

```bash
# Run tests
docker-compose exec tennis-refactoring composer test
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
docker-compose exec tennis-refactoring composer test

# Or use the container name directly
docker exec ipc25-tennis composer test
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

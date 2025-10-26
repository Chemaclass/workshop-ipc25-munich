# Parrot Refactoring Kata

Refactor code using Polymorphism. The kata is fully functional with a complete test suite. Your objective is to improve the code while keeping all tests passing.

## Quick Start

### Using Docker (Recommended)

```bash
# From the parrot directory
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
docker-compose exec parrot-refactoring composer test

# Run tests with coverage report
docker-compose exec parrot-refactoring composer test-coverage

# Check code standards
docker-compose exec parrot-refactoring composer check-cs

# Fix code standards
docker-compose exec parrot-refactoring composer fix-cs

# Run static analysis
docker-compose exec parrot-refactoring composer phpstan

# Stop the container when done
docker-compose down
```

Alternatively, use the container name directly:

```bash
docker exec ipc25-parrot composer test
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

### Project Structure

- `src/` - Contains the Parrot class and ParrotTypeEnum that need to be refactored
- `tests/` - Contains the complete test suite (all tests are passing)

### Dependencies

The kata uses:

- [PHPUnit](https://phpunit.de/) - Testing framework
- [PHPStan](https://github.com/phpstan/phpstan) - Static analysis
- [Easy Coding Standard (ECS)](https://github.com/symplify/easy-coding-standard) - Code standards (PSR-12)

---

> Original: https://github.com/emilybache/Parrot-Refactoring-Kata

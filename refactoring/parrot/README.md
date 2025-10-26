# Parrot Refactoring Kata

Refactor code using Polymorphism. The kata is fully functional with a complete test suite. Your objective is to improve the code while keeping all tests passing.

## Quick Start

### Using Docker (Recommended)

```bash
# From the parrot directory
docker-compose up
```

Then in another terminal:

```bash
# Run tests
docker-compose exec parrot-refactoring composer test
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
docker-compose exec parrot-refactoring composer test

# Run tests with coverage report
docker-compose exec parrot-refactoring composer test-coverage

# Check code standards
docker-compose exec parrot-refactoring composer check-cs

# Fix code standards
docker-compose exec parrot-refactoring composer fix-cs

# Run static analysis
docker-compose exec parrot-refactoring composer phpstan
```

Or use the container name directly:

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

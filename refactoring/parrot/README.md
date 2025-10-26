# Parrot Refactoring Kata

The Kata is fully functional, with a full test suite. The objective of this Kata is to 
improve the code using Pol(l)ymorphism. The tests do not need to be changed.

## Installation

### Option 1: Using Docker (Recommended)

Run the project in a Docker container with zero PHP setup required:

```bash
# From the parrot directory
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

- [PHP 8.3+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)
- [Git](https://git-scm.com/downloads)

Install all the dependencies using composer:

```sh
composer install
```

Run all the tests:

```shell script
composer test
```

## Dependencies

The kata uses composer to install:

- [PHPUnit](https://phpunit.de/)
- [PHPStan](https://github.com/phpstan/phpstan)
- [Easy Coding Standard (ECS)](https://github.com/symplify/easy-coding-standard)

## Folders

- `src` - contains the Parrot class which need to be refactored and a ParrotTypeEnum.
- `tests` - contains the corresponding tests. All the tests are passing, and shouldn't need to be changed.

## Testing

PHPUnit is pre-configured to run tests. PHPUnit can be run using a composer script. To run the unit tests, from the root
of the PHP kata run:

```shell script
composer tests
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias pu="composer test"`), the same
PHPUnit `composer test` can be run:

```shell script
pu.bat
```

### Tests with Coverage Report

To run all test and generate a html coverage report run:

```shell script
composer test-coverage
```

The test-coverage report will be created in /builds, it is best viewed by opening /builds/**index.html** in your browser.

## Code Standard

Easy Coding Standard (ECS) is used to check for style and code standards, **PSR-12** is used.

### Check Code

To check code, but not fix errors:

```shell script
composer check-cs
``` 

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias cc="composer check-cs"`), the
same `composer check-cs` can be run:

```shell script
cc.bat
```

### Fix Code

There are many code fixes automatically provided by ECS, if advised to run --fix, the following script can be run:

```shell script
composer fix-cs
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias fc="composer fix-cs"`), the same 
`composer fix-cs` can be run:

```shell script
fc.bat
```

## Static Analysis

PHPStan is used to run static analysis checks:

```shell script
composer phpstan
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias ps="composer phpstan"`), the 
same `composer phpstan` can be run:

```shell script
ps.bat
```

**Happy coding**!

# Hands-On Refactoring Workshop: Modernizing Legacy PHP with Pair Programming

In this hands-on workshop, you'll learn how to transform messy legacy PHP code into clean, maintainable software—without breaking existing behavior.

We'll start with simple refactoring exercises and progress to advanced techniques. Using legacy-style code katas, you'll practice applying automated tests—including golden, characterization, and snapshot tests—to build confidence and safety while modernizing code.

By pair programming, you'll experience:
- Collaborative problem-solving
- Test-Driven Development (TDD) in action
- Safe, incremental changes that bring clarity and structure to real-world legacy code

## Setup

### Option 1: Using Docker

No PHP installation needed! Have Docker installed and running.

```bash
# Navigate to any project directory
cd tdd/rock-paper-scissors/
# or cd tdd/guess-random-number/
# or cd refactoring/parrot/
# or cd refactoring/tennis/

# Run the project in Docker
docker-compose up
```

Docker will:
- Build a PHP 8.3 environment
- Install dependencies automatically
- Run the tests
- Keep running so you can execute commands in the container

See the individual project READMEs for more Docker commands.

### Option 2: Local PHP Setup

You can install dependencies locally and run the projects on your machine.

Requires:
- PHP 8.3+
- Composer

See each project's README for local setup instructions.

## Katas

We'll work through two categories:
- TDD — Practicing test-first development and clean design.
- Refactoring — Safely improving existing, often untested, legacy code.

### TDD

#### 1. Rock paper scissors

- Define rules and logic clearly with tests.
- Cover all outcomes efficiently using parameterized tests.
- Keep code clean, readable, and modular.

#### 2. Guess the random number

- Control randomness with mocks/stubs.
- Cover edge cases and unusual scenarios.
- Separate logic from I/O for easier testing.


### Refactoring

#### 3. Parrot

- Refactor in small, safe, test-backed steps.
- Remove code smells and clarify intent.
- Add tests before modifying risky legacy code.

#### 4. Tennis

- Refactor complex, conditional-heavy logic safely.
- Improve readability with meaningful names and abstractions.
- Eliminate duplication and long methods in legacy code.

---

### Books

- **Test-Driven Development by Example** by Kent Beck ([Amazon](https://www.amazon.de/-/en/Kent-Beck/dp/0321146530/))
- **Refactoring** by Martin Fowler ([Amazon](https://www.amazon.de/-/en/Martin-Fowler/dp/0134757599/))
- **Working Effectively with Legacy Code** by Michael C. Feathers ([Amazon](https://www.amazon.de/-/en/Michael-C-Feathers/dp/0131177052/))

### Videos

- [Does TDD Really Lead to Good Design?](https://youtu.be/KyFVA4Spcgg)
- [Introduction to Test Driven Development](https://youtu.be/04FzlrMKPTM)

### Blog Posts

- [The art of testing: where design meets quality](https://chemaclass.com/blog/the-art-of-testing/)
- [Test-Driven (Development) - What is challenging about it?](https://chemaclass.com/blog/test-driven-development/)
- [TDD vs BDD - Design or Workflow?](https://chemaclass.com/blog/tdd-vs-bdd/)

---

## Cleanup

To remove all Docker containers from the workshop:

```bash
docker rm -f ipc25-parrot ipc25-tennis ipc25-rps ipc25-guess-number
```

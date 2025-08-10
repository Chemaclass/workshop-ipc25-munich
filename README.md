# Hands-On Refactoring Workshop: Modernizing Legacy PHP with Pair Programming

In this hands-on PHP workshop, we’ll start with simple refactoring and progressively explore powerful techniques. Through legacy-style code katas, you’ll learn how to use automated tests (such as golden, characterization, and snapshot tests) to confidently improve code while preserving its behavior. By working in pairs, you’ll experience the benefits of collaboration, test-driven development, and making safe, incremental changes that bring clarity and structure to real-world legacy code.

### Setup

You can either install the dependencies locally or use the provided docker container.

## Katas

### TDD

This is a scaffolding kata setup to practice TDD and Refactoring in PHP.

- Working example in the `tdd/setup/src` and `tdd/setup/tests` folder.
- PHPUnit installed

```bash
make build
make test
```

#### 1. [Rock paper scissors](https://hackmd.io/@evalverde/ipc-remote-kata-1)

- TDD Cycle
- Baby steps
- Triangulation

#### 2. [Guess the random number](https://www.codurance.com/katas/random-number-kata)

- CRC cards
- Mock it if you own it
- Collaborators
- Solitary or Sociable test
- Triangulation
- Test desiderata

### Refactoring

Working example in the `refactoring/` folder.

#### 3. [Tennis](https://github.com/emilybache/Tennis-Refactoring-Kata)

- CRC cards
- Mock it if you own it
- Collaborators
- Solitary or Sociable test
- Triangulation
- Test desiderata

#### 4. [Gilded Rose](https://www.codurance.com/katas/gilded-rose)

- CRC cards
- Mock it if you own it
- Collaborators
- Triangulation
- Test desiderata

---

### Books

- **Test-Driven Development by Example** by Kent Beck ([Amazon](https://www.amazon.de/-/en/Kent-Beck/dp/0321146530/))
- **Refactoring** by Martin Fowler ([Amazon](https://www.amazon.de/-/en/Martin-Fowler/dp/0134757599/))
- **Working Effectively with Legacy Code** by Michael C. Feathers ([Amazon](https://www.amazon.de/-/en/Michael-C-Feathers/dp/0131177052/))

### Videos

- [Does TDD Really Lead to Good Design?](https://youtu.be/KyFVA4Spcgg)
- [Introduction to Test Driven Development](https://youtu.be/04FzlrMKPTM)

### Posts

- [The art of testing: where design meets quality](https://chemaclass.com/blog/the-art-of-testing/)
- [Test-Driven (Development) - What is challenging about it?](https://chemaclass.com/blog/test-driven-development/)
- [TDD vs BDD - Design or Workflow?](https://chemaclass.com/blog/tdd-vs-bdd/)

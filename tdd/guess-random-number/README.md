# Guess Random Number

> Inspired by [Codurance: Guess the Random Number](https://www.codurance.com/publications/guess-the-random-number)

## 🧠 Problem Statement

Build a simple game where a player tries to guess a randomly generated number between 1 and 10. The player has **3 attempts**. After each guess, the system tells the player if the correct number is higher or lower. If the player guesses correctly, they win; otherwise, they lose.

---

## 📜 Business Rules

- A random number is generated at the beginning of the game and **remains constant** until the game ends.
- The player gets max **three attempts** to guess the number.
- If the guess is correct:
    - The player **wins**.
- If the guess is incorrect:
    - The game tells the player if the correct number is **higher or lower**.
    - If the player uses all 3 attempts unsuccessfully, they **lose**.

---

## ✅ Use Cases

### 1. 🎉 Player wins on the first guess
```php
$game = new GuessingNumberGame(new StubGenerator(5));
echo $game->guessNumber(5); // "You win!"
```

### 2. 🧗 Player wins after multiple guesses
```php
$game = new GuessingNumberGame(new StubGenerator(5));
echo $game->guessNumber(10); // "Lower"
echo $game->guessNumber(3);  // "Higher"
echo $game->guessNumber(5);  // "You win!"
```

### 3. 💀 Player loses
```php
$game = new GuessingNumberGame(new StubGenerator(5));
echo $game->guessNumber(1);  // "Higher"
echo $game->guessNumber(10); // "Lower"
echo $game->guessNumber(3);  // "You lose! The number was 5"
```

---

## 🛠️ Suggested Class API

```php
interface RandomNumberGenerator {
    public function generate(): int;
}

final class GuessingNumberGame
{
    public function __construct(private RandomNumberGenerator $generator) {}

    public function guessNumber(int $n): string {}
}
```

---

## 🧪 TDD Plan

### Test 1: Win on first try
```php
$game = new GuessingNumberGame(new StubGenerator(5));
assert($game->guessNumber(5) === "You win!");
```

### Test 2: Hint "higher" and "lower"
```php
$game = new GuessingNumberGame(new StubGenerator(7));
assert($game->guessNumber(4) === "Higher");
assert($game->guessNumber(9) === "Lower");
```

### Test 3: Win on last attempt
```php
$game = new GuessingNumberGame(new StubGenerator(7));
$game->guessNumber(3);
$game->guessNumber(6);
assert($game->guessNumber(7) === "You win!");
```

### Test 4: Lose after 3 wrong attempts
```php
$game = new GuessingNumberGame(new StubGenerator(5));
$game->guessNumber(1);
$game->guessNumber(2);
assert($game->guessNumber(3) === "You lose! The number was 5");
```

---

## 👷 Implementation Tips

- Track the number of attempts left.
- Lock in the generated number on instantiation.
- Return messages from `guessNumber()` method.
- Use dependency injection for `RandomNumberGenerator` in tests.

---

## 🧹 Things to Avoid

- Re-generating the random number on every guess.
- Exposing internal state.
- Mixing logic and presentation.

---

## 📚 Concepts Practiced

- Test Doubles / Mocking
- Baby steps & micro-iterations
- Object Calisthenics
- Primitive Obsession elimination

---

## 🔁 Bonus

- Extend the range (e.g., 1–100)
- Make number of attempts configurable
- Add user interaction (via CLI or Web)

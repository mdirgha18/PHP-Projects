// Level 1

<!-- <?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userGuess = $_POST["guess"];

    // Generate random number between 1 and 10
    $randomNumber = rand(1, 10);

    if ($userGuess == $randomNumber) {
        $result = "🎉 Correct! Number was $randomNumber";
    } else {
        $result = "❌ Wrong! Number was $randomNumber";
    }
}
?>

<h2>Number Guessing Game</h2>

<form method="post">
    Guess a number (1-10):
    <input type="number" name="guess" min="1" max="10" required>
    <input type="submit" value="Guess">
</form>

<p><?php echo $result; ?></p> -->


// Level 2

<!-- <?php
session_start();

// Generate number only once
if (!isset($_SESSION["number"])) {
    $_SESSION["number"] = rand(1, 10);
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userGuess = $_POST["guess"];
    $correctNumber = $_SESSION["number"];
    

    if ($userGuess == $correctNumber) {
        $result = "🎉 Correct! You guessed it!";
        session_destroy(); // reset game
    } elseif ($userGuess < $correctNumber) {
        $result = "⬆ Try higher!";
    } else {
        $result = "⬇ Try lower!";
    }
}
?>

<h2>Number Guessing Game</h2>

<form method="post">
    Guess a number (1-10):
    <input type="number" name="guess" min="1" max="10" required>
    <input type="submit" value="Guess">
</form>

<p><?php echo $result; ?></p> -->



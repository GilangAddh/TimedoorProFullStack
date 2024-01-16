<?php
$quotes = [
    [
        "author" => "Ludwig van Beethoven",
        "quote" => "Art! Who comprehends her? With whom can one consult concerning this great goddess?"
    ],
    [
        "author" => "Nelson Mandela",
        "quote" => "The greatest glory in living lies not in never falling, but in rising every time we fall."
    ],
    [
        "author" => "Steve Jobs",
        "quote" => "Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking."
    ],
    [
        "author" => "Walt Disney",
        "quote" => "The way to get started is to quit talking and begin doing."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "If life were predictable it would cease to be life, and be without flavor."
    ],
];

$author = isset($_GET['author']) ? $_GET['author'] : "";
$quote = isset($_GET['quote']) ? $_GET['quote'] : "";
$newQuote = ["author" => $author, "quote" => $quote,];
array_push($quotes, $newQuote);

$display = isset($_GET['display']) ? $_GET['display'] : false;

if ($display) {
    $displayQuotes = $newQuote;
} else {
    $index = rand(0, count($quotes) - 1);
    $displayQuotes = $quotes[$index];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Generator</title>
</head>

<body>
    <h1>Quote of the day!</h1>
    <p>Press <i>f5</i> or <i>ctrl + R</i> to randomize the quote</p>
    <h4><?= $displayQuotes["quote"]; ?> - <?= $displayQuotes["author"]; ?></h4>

    <form action="">
        <label for="author">Author Name</label>
        <input type="text" name="author">
        <br>
        <label for="quote">Quote</label>
        <input type="text" name="quote">
        <br>
        <label for="display">Show Input Quote</label>
        <input type="checkbox" name="display">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
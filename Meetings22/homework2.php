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

$index = rand(0, count($quotes) - 1);
$displayQuotes = $quotes[$index];
print_r($displayQuotes);

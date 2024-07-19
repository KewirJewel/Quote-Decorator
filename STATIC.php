<?php
//Array of quote
$quote= array(
    "The greatest glory in living lies not in never falling,b but in rising everytime we fall.-Nelson Mandela",
    "The future belongs to those who believe in the beauty of their dreams.-Eleanor Roosevelt",
    "The only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle.-Steve Jobs"
);
//Get the quote
$quote = rand(0,count($quote))
echo "<p>$quote<\p>";
?>
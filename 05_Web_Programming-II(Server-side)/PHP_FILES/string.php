<?php
$x = "double quotes";
$y = 'single quotes';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo "length of Hello world is ";
echo strlen("Hello world!");
echo "<br>";
echo "number of words in too many dogs is ";
echo str_word_count("too many dogs");
echo "<br>";
echo "reverse of the word Tsunami is ";
echo strrev("Tsunami");
echo "<br>";
echo "position of the word wrold is ";
echo strpos("Hello world!", "world");
echo "<br>";
echo "replacing the word world with universe we get ";
echo str_replace("world", "universe", "Hello world!");


?>
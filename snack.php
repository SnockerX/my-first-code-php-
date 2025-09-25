# my-first-code-php-
This is the first code in the PHP language. It is a small program that I serve, for example, in a restaurant. A customer chooses his needs. The program finally takes everything and gives the result or invoice.
<?php
echo "hello can you give me your name : ";
$name = trim(fgets(STDIN));

echo "\nwelcome $name ! here is our menu:\n\n";
echo "PIZZA =2$\t";
echo "TACOS =3$\t";
echo "BURGER =4$\t";
echo "SANDWICH =1$\t";
echo "JUICE =1.5$\n\n";

$total_final = 0;

while (true) {
    echo "what food do you want ? (type STOP to finish): ";
    $food = strtoupper(trim(fgets(STDIN)));

    if ($food == "STOP") {
        break;
    }

    echo "how much $food do you want: ";
    $count = trim(fgets(STDIN));

    if ($food == "PIZZA") {
        $total_final += $count * 2;
    } elseif ($food == "TACOS") {
        $total_final += $count * 3;
    } elseif ($food == "JUICE") {
        $total_final += $count * 1.5;
    } elseif ($food == "BURGER") {
        $total_final += $count * 4;
    } elseif ($food == "SANDWICH") {
        $total_final += $count * 1;
    } else {
        echo "sorry, $food is not in the menu.\n";
    }
}

echo "\n==============================\n";
echo "welcome $name!\n";
echo "your total account is: $total_final $\n";
echo "==============================\n";

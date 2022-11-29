<?php 

namespace php_latest\homeworks\homework_4;

use php_latest\homeworks\Color;

$Color = new Color(200, 200, 200);

echo "<h2>Домашнє завдання № 4</h2>";

echo "<h3>Створення класу кольору:</h3>";

echo "<p>Червоний: " . $Color->getRed() . "</p><br>";
echo "<p>Зелений: " . $Color->getGreen() . "</p><br>";
echo "<p>Синій: " . $Color->getBlue() . "</p><br>";

$Color2 = clone $Color;

echo "<h3>Порівняння двох класів:</h3>";

if ($Color->equals($Color2)){
    echo "<p>Класи співпадають</p><br>";
} else {
    echo "<p>Класи не співпадають</p><br>";
}

echo "<br>";

$Color3 = new Color(100, 100, 100);

$mixedColor = $Color->mix($Color3);

echo "<h3>Змішування кольорів:</h3>";

echo "<p>Отриманий червоний: " . $mixedColor->getRed() . "</p><br>";
echo "<p>Отриманий зелений: " . $mixedColor->getGreen() . "</p><br>";
echo "<p>Отриманий синій: " . $mixedColor->getBlue() . "</p><br>";

echo "<br>";

$randomColor = Color::random();
echo "<h3>Випадковий колір:</h3>";

echo "червоний: " . $randomColor->getRed() . "<br>";
echo "зелений: " . $randomColor->getGreen() . "<br>";
echo "синій: " . $randomColor->getBlue() . "<br>";

echo "<hr><br>";

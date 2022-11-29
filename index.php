<?php 

namespace php_latest;

use PDO;
use PDOException;

$host= 'db';
$db = 'php-latest';
$user = 'postgres';
$password = 'postgres';

$dsn = "pgsql:host=$host;port=5432;dbname=$db;";

require __DIR__ . "/vendor/autoload.php";

try{
    $connection = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $exc){
    echo "<p style='color:red;'> {$exc->getMessage()} </p>";
    exit(1);
}

$Color = new Color(200, 200, 200);

echo "<h2>Створення класу кольору:</h2>";

echo "червоний: " . $Color->getRed() . "<br>";
echo "зелений: " . $Color->getGreen() . "<br>";
echo "синій: " . $Color->getBlue() . "<br>";

$Color2 = clone $Color;

echo "<h2>Порівняння двох класів:</h2>";

if ($Color->equals($Color2)){
    echo "<p>Класи співпадають</p><br>";
} else {
    echo "<p>Класи не співпадають</p><br>";
}

echo "<br>";

$Color3 = new Color(100, 100, 100);

$mixedColor = $Color->mix($Color3);

echo "<h2>Змішування кольорів:</h2>";

echo "Отриманий червоний: " . $mixedColor->getRed() . "<br>";
echo "Отриманий зелений: " . $mixedColor->getGreen() . "<br>";
echo "Отриманий синій: " . $mixedColor->getBlue() . "<br>";

echo "<br>";

$randomColor = Color::random();
echo "<h2>Випадковий колір: </h2>";

echo "червоний: " . $randomColor->getRed() . "<br>";
echo "зелений: " . $randomColor->getGreen() . "<br>";
echo "синій: " . $randomColor->getBlue() . "<br>";

?>

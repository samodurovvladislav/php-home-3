<?php 

namespace php_latest\homeworks\homework_5;

use php_latest\homeworks\homework_5\User;
use Exception;
use InvalidArgumentException;

echo "<h2>Домашнє завдання № 5</h2>";

$User = new User(1, "pass");

echo "<h3>Коректно створений користувач:</h3>";

print_r($User);

echo "<br>";

echo "<h3>Створення користувача із некорректним id</h3>";

try{
    $wrongIdUser = new User("0000", 'pass');
} catch (Exception|InvalidArgumentException $exc){
    echo "<p style='color:red;'>Повідомлення: {$exc->getMessage()}</p>";
    echo "<p style='color:red;'>Файл: {$exc->getFile()}</p>";
    echo "<p style='color:red;'>Рядок: {$exc->getLine()}</p>";
}

echo "<br>";

echo "<h3>Створення користувача із некорректним паролем</h3>";

try{
    $wrongPasswordUser = new User(111, 'passwordwithalotofsymbols');
} catch (Exception|InvalidArgumentException $exc){
    echo "<p style='color:red;'>Повідомлення: {$exc->getMessage()}</p>";
    echo "<p style='color:red;'>Файл: {$exc->getFile()}</p>";
    echo "<p style='color:red;'>Рядок: {$exc->getLine()}</p>";
}

echo "<br>";

echo "<hr><br>";

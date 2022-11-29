<?php 

namespace php_latest\homeworks\homework_7;

use php_latest\homeworks\homework_7\User;
use Error;
use Exception;

echo "<h2>Домашнє завдання № 7</h2>";

echo "<h3>Стоверення нового користувача:</h3>";

try{
    $User = new User();
    echo "<p>Користувача ініціалізовано!</p>";
} catch (Error|Exception|UserException $exc){
    echo "<p style='color:red;'>Повідомлення: {$exc->getMessage()}</p>";
    echo "<p style='color:red;'>Файл: {$exc->getFile()}</p>";
    echo "<p style='color:red;'>Рядок: {$exc->getLine()}</p>";
}

$name = "Vlad";
$age = 21;
$email = "example.email@example.com";

echo "<p>Задаємо ім'я користувача: $name</p>";

try{
    $User->setName($name);
    echo "<p>Ім'я вдало задано!</p>";
} catch (Error|Exception|UserException $exc){
    echo "<p style='color:red;'>Повідомлення: {$exc->getMessage()}</p>";
    echo "<p style='color:red;'>Файл: {$exc->getFile()}</p>";
    echo "<p style='color:red;'>Рядок: {$exc->getLine()}</p>";
}

echo "<br>";

echo "<p>Задаємо вік користувача: $age</p>";

try{
    $User->setAge($age);
    echo "<p>Вік вдало задано!</p>";
} catch (Error|Exception|UserException $exc){
    echo "<p style='color:red;'>Повідомлення: {$exc->getMessage()}</p>";
    echo "<p style='color:red;'>Файл: {$exc->getFile()}</p>";
    echo "<p style='color:red;'>Рядок: {$exc->getLine()}</p>";
}

echo "<br>";

echo "<p>Задаємо пошту користувача: $email</p>";

try{
    $User->setEmail($email);
    echo "<p>Email вдало задано!</p>";
} catch (Error|Exception|UserException $exc){
    echo "<p style='color:red;'>Повідомлення: {$exc->getMessage()}</p>";
    echo "<p style='color:red;'>Файл: {$exc->getFile()}</p>";
    echo "<p style='color:red;'>Рядок: {$exc->getLine()}</p>";
}

echo "<br>";

echo "<p>Виводимо всі дані користувача:</p>";

try{
    $userAllData = $User->getAll();
    echo "<p>Ім'я: {$userAllData['name']}</p>";
    echo "<p>Вік: {$userAllData['age']}</p>";
    echo "<p>Email: {$userAllData['email']}</p>";
} catch (Error|Exception|UserException $exc){
    echo "<p style='color:red;'>Повідомлення: {$exc->getMessage()}</p>";
    echo "<p style='color:red;'>Файл: {$exc->getFile()}</p>";
    echo "<p style='color:red;'>Рядок: {$exc->getLine()}</p>";
}

echo "<br>";



echo "<hr><br>";

<?php 

namespace php_latest\homeworks\homework_5;

use InvalidArgumentException;

class User{

    private int $id;
    private string $password;

    public function __construct($id, string $password)
    {
        $this->setId($id);
        $this->setPassword($password);
    }

    private function setId($id): int
    {
        if (filter_var($id, FILTER_VALIDATE_INT) === false){
            throw new InvalidArgumentException("ID користувача має бути числом!", 422);
        }

        return $this->id = $id;

    }

    private function setPassword(string $password): string
    {
        if (strlen(trim($password)) > 8){
            throw new InvalidArgumentException("Пароль має бути не більше 8-ми символів!", 422);
        }

        return $this->password = $password;

    }

    public function getUserData(): array
    {

        return ["id" => $this->id, "password" => $this->password];

    }

}

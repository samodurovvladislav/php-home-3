<?php 

namespace php_latest\homeworks\homework_7;

use php_latest\homeworks\homework_7\UserException;

class User{

    private string $name;
    private string $age;
    private string $email;

    public function getAll(): array{

        return ["name" => isset($this->name) ? $this->name : "", "age" => isset($this->age) ? $this->age : "", "email" => isset($this->email) ? $this->email : ""];

    }

    public function __call(string $name, $arguments): void    
    {
        if (!method_exists($this, $name)){
            throw new UserException("Метод не існує!");
        }

        call_user_func_array([$this, $name], $arguments);
    }

    private function setName(string $name): void
    {

        $this->name = $name;

    }

    private function setAge(string $age): void
    {
        $this->age = $age;
    }

}

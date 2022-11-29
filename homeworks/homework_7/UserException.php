<?php 

namespace php_latest\homeworks\homework_7;

use Exception;
use Throwable;

class UserException extends Exception{

    public function __construct(string $message = "", int $code = 0, Throwable|null $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}

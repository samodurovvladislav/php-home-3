<?php 

namespace php_latest\homeworks\homework_6;

class Test{

    use Trait1, Trait2, Trait3
    {
        Trait1::test insteadof Trait2;        
        Trait2::test as test2;
        Trait2::test insteadof Trait3;
        Trait3::test as test3;        
    }    

    public function getSum(): int
    {
        return $this->test() + $this->test2() + $this->test3();
    }

}

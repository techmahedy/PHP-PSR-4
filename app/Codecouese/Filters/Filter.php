<?php

namespace Codecouese\Filters;
use Codecouese\Model\User;

class Filter {
   
    public function __construct(){
       
    }

    public function GetDataFromUserClass(User $class){
        return $class->Display();
    }
}
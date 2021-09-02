<?php 

require_once 'social.php';

class User{
    protected $name;
    protected $surname;
    protected $age;
    protected $email;
    protected $pwd;

    use Social;

    function __construct($_email, $_pwd, $_age){
        
        if( is_int($_age) && $_age <= 100 && is_string($_pwd) && strlen($_pwd) > 7){
            $this->email = $_email;
            $this->pwd = $_pwd;
            $this->age = $_age;
        }
        elseif(!is_int($_age)){
            throw new Exception('Is not a number');
        }
        elseif($_age > 100){
            throw new Exception('You are too old');
        }
        elseif(!is_string($_pwd)){
            throw new Exception('Invalid password');
        }
        else{
            throw new Exception('Short password');
        }
    }

    function setName($_name){
        $this->name = $_name;
    }

    function setSurname($_surname){
        $this->surname = $_surname;
    }

    function getData($_info){
        return $this->$_info;
    }
    
    function getName(){
        if($this->name){
            return $this->name;
        }
    }

    function getSurname(){
        if($this->surname){
            return $this->surname;
        }
    }

    function getAge(){
        return $this->age;
    }

    function getEmail(){
        return $this->email;
    }


    function getAllData(){
        $res=[];
        array_push($res, $this->name);
        array_push($res, $this->surname);
        array_push($res, $this->age); 
        array_push($res, $this->email);   
        array_push($res, $this->pwd); 
        return $res;
    }
    
}
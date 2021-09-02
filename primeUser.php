<?php

require_once 'user.php';

class PrimeUser extends User {
    private $primeID;
    protected $preferiti = [];
    private $carta;


    function __construct($_email, $_pwd, $_age, $_primeID ){
        
        if(strlen($_primeID) <= 7){
           $this->primeID = $_primeID; 
        }
        else{
            throw new Exception('Identificazione non valida');
        }
        parent::__construct( $_email, $_pwd, $_age);
    }

    function getPrimeID(){
        return $this->primeID;
    }

    function getAllData(){
        
        parent::getAllData();
        $res=[];
        array_push($res, $this->name);
        array_push($res, $this->surname);
        array_push($res, $this->age); 
        array_push($res, $this->email);   
        array_push($res, $this->pwd); 
        array_push($res, $this->primeID);
            
        return $res;
    }

    function setCarta($_carta_num, $_carta_data, $_carta_code){
        if(strlen($_carta) == 16 && strlen($_carta_data) && strlen($_carta_code)){

        }else{
            throw new Exception('numero non valido');
        }
    }
}
<?php

require_once 'user.php';
require_once 'primeUser.php';

class Product{
    protected $prodName;
    protected $description;
    protected $prise;
    protected $sale;
    protected $category;
    protected $disp;

    function __construct($_prodName, $_description, $_category, $_disp){
        $this->prodName = $_prodName;
        $this->description = $_description;
        $this->category = $_category;
        $this->disp = $_disp;
    }

    function setSale($_sale){
        $this->sale = $_sale;
    }

    function setPrice($_price){
        $this->price = $_price;
    }

    function setDisp($_boolean){
        $this->disp = $_boolean;
    }

    function getDisp(){
        return $this->disp;
    }

    function getPrice(){
        if(is_int($this->price)){
            return $this->price;
        }else{
            throw new Exception('no price');
        }
    }

    function getProdName(){
        return $this->prodName;
    }
    
    function getDescription(){
        return $this->description;
    }

    function getCategory(){
        return $this->category;
    }

    function getSale(){
        if(is_int($this->sale)){
            return $this->sale;
        }else{
            throw new Exception('no price');
        }
    }

    function buy($user){
        if($user->getPrimeID()){
            $this->setSale(20);
            if($user->getAge() > 65){
                $_sale = $this->getSale();
                $this->setSale($_sale + 10);
                if($this->disp){
                    return 'il prodotto è disponibile con il ' . $this->sale . '% di sconto';
                }else{
                    return 'il prodotto non è disponibile';
                }
            }else{
                if($this->disp){
                    return 'il prodotto è disponibile con il ' . $this->sale . '% di sconto';
                }
            }
        }
        else{
            return 'non sei loggato';
        }
        
    }
}
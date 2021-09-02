<?php

trait Social {
    protected $facebook;
    protected $twitter;
    protected $instagram;

    function setFacebookLink($_facebook){
        $this->facebook = $_facebook;
    }

    function setTwitterLink($_twitter){
        $this->twitter = $_twitter;
    }

    function setInstagramLink($_instagram){
        $this->instagram = $_instagram;
    }

    function getLinks(){
        return  $this->facebook . ' ' .
                $this->twitter . ' ' .
                $this->instagram;
    }
}

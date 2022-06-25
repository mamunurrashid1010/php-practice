<?php
/*
 * This is example of php class,object and constructor
 */
class owner{
    public $ownerName;
    function __construct(){
        $this->ownerName="Mamunur Rashid";
    }
    function getOwnerName(){
        return $this->ownerName;
    }
}

$obj=new owner();
echo "Owner: ".$obj->getOwnerName();

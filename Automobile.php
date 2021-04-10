<?php

class Automobile{
	var $LicencePlate;
	var $Brand;
	var $Model;
	var $Modelyear;
	var $Color;
	
	function __construct(){
			
			$this->LicencePlate=$LicencePlate;
			$this->Brand=$Brand;
			$this->Model=$Model;
			$this->Modelyear=$Modelyear;
			$this->Color=$Color;
	}
	
	function __toString()
    {
        try 
        {
            return (string) $this->Model;
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }
}
?>
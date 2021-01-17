<?php

class conexionBD{

    public static function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=crud", "root", "");

        return $bd;

    }

}

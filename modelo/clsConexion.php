<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsConexion
 *
 * @author Beca98
 */
class clsConexion {
    //put your code here
    
    //atributos 
    
    private $conexion;
    
    
    
    
    //métodos 
    public function __construct()
    {
        $this->conexion = new mysqli('localhost', 'root', '', 'bdproductos');
    }
    
    public function getConexion(){
        return $this->conexion;
    }
    
    
    
}

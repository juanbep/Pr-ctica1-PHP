<?php
require ('modelo/clsConexion.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsProductoAcceso
 *
 * @author Beca98
 */
class clsProductoAcceso {
    //put your code here
    
    //atributos 
    private $conexion;
    
    
    
    //métodos 
    public function __construct()
    {
        $this->conexion = new clsConexion();
    }
    
    public function listar(){
        $sql =  'SELECT * FROM PRODUCTO';
        $consulta = $this->conexion->getConexion()->query($sql);
        $listadoProductos = [];
        $iterador = 0;
        
        while($fila = $consulta->fetch_assoc()){
            
            $listadoProductos[] = $fila;
            $iterador++;
            
        }
        return $listadoProductos;
    }
}

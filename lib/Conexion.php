<?php

class Conexion 
{
    private static $host = NULL;
    private static $dbname = NULL;
    private static $usuario = NULL;
    private static $clave = NULL;
    private static $pdo = NULL;
    private static $result = NULL; 
       
    public static function conectar($host = "localhost", $dbname="uanfilms", $usuario="root", $clave="sagitario16192103000") //RECORDAR CAMBIAR LA CLAVE POR LA DE SU MYSQL
    {      
        self::$host = $host;
        self::$dbname = $dbname;
        
        if( $_SESSION["DIRAPP"] ) 
            self::$dbname = $_SESSION["DIRAPP"];
    
        
        self::$usuario = $usuario;
        self::$clave = $clave; 
        
        try 
        { 
            self::$pdo = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbname, self::$usuario, self::$clave, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
           
            return self::$pdo;
        } 
        catch (PDOException $e) 
        {
             //mail( "soporte@tendencyapps.com", "Error SQL", $e->getMessage() );
            die('Error: ' . $e->getMessage());
        }
    }


    public static function ejecutar($sql) 
    {
        //Se usa este replace para ajustar todos los campos que no se envian y deben llegar 
        //en los insert
        $sql = str_replace("''",0, $sql);
        
        try 
        {
            self::$result = self::$pdo->query( $sql );
			
            if(!self::$result)
            {
                $error = self::$pdo -> errorInfo();       
                //mail( "david.caicedo@tendencyapps.com", "TENDENCY ERRORES PDO BD1", print_r($error, true).$sql );                
            }           
        } 
        catch ( PDOException $e ) 
        {
           echo 'Error: ' . $e -> getMessage();
           echo 'Error: ' . self::$pdo -> errorInfo();
        }
		
        return self::$result;
    }
    
    
    public static function ejecutar_dos($sql) 
    {
        //Se usa este replace para ajustar todos los campos que no se envian y deben llegar 
        //en los insert
        
        $sql = str_replace("''",0, $sql);
        
        echo "<hr>".$sql;
        
        try 
        {
            self::$result = self::$pdo->query( $sql );
			
            if(!self::$result)
            {
                $error = self::$pdo -> errorInfo();       
                //mail( "david.caicedo@tendencyapps.com", "TENDENCY ERRORES PDO BD1", print_r($error, true).$sql );                
            }           
        } 
        catch ( PDOException $e ) 
        {
           echo 'Error: ' . $e -> getMessage();
           echo 'Error: ' . self::$pdo -> errorInfo();
        }
		
        return self::$result;
    }

    public static function obtener($sql, $index = 'assoc', $matriz = NULL) 
    {
    	self::$result = self::$pdo -> query( $sql );
        
        if (self::$result === false) 
        {
            return array();
        }
        
        foreach (self::$result as $fila) 
        {
            $matriz[] = $index !== 'assoc' && $index !== 'index' ? $fila : get_array($fila, $index);
        }
        return $matriz;
    }
    
    
    public static function filas() 
    {
        return self::$result->rowCount();
    }

}

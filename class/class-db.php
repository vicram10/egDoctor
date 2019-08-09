<?php
    if (!defined('eGeek'))
        die('Acceso Prohibido');

    class businessLayer extends PDO
    {
        //constructor
        function __construct(){
            $this->stringConnection = 'mysql:host=localhost;dbname=egDoctor';
            $this->user = 'root';
            $this->password = '';    
        }
        
        //abrimos la conexion a la base de datos
        function open(){
            global $conn;
            try
            {
                $conn = new PDO($this->stringConnection,
                    $this->user, 
                    $this->password);
                //para poder mostrar los errores
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $PDOError)
            {
                echo "ERROR: " . $PDOError->getMessage();
                exit;
            }        
        }
    }
?>
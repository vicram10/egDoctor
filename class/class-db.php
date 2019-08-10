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

        //para hacer consultas a la base de datos
        function query($consulta, $parametros){
            global $conn, $msgError;
            $resultado = array();
            $msgError = '';
            try
            {
                $sql = $conn->prepare($consulta, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                if (count($parametros)>0)
                {
                    $sql->execute($parametros);
                    $resultado = $sql->fetchAll();
                }else{
                    $sql->execute();
                    $resultado = $sql->fetchAll();
                }
                $sql->closeCursor();
            }
            catch(PDOException $PDOError)
            {
                $msgError = $PDOError->getMessage();
            }
            return $resultado;
        }
    }
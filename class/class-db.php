<?php
    if (!defined('eGeek'))
        die('Acceso Prohibido');

    class businessLayer extends PDO
    {
        //constructor
        function __construct(){
            $this->stringConnection = db_connection;
            $this->user = db_user;
            $this->password = db_password;    
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
                die("ERROR: " . $PDOError->getMessage());
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
                $msgError = sprintf(error_consulta_no_realizada, $PDOError->getMessage(), $consulta, json_encode($parametros));
            }
            return $resultado;
        }

        //para poder ejecutar sin necesidad de devolver un valor
        function ejecutar($string)
        {
            global $context, $conn, $msgError;
            try
            {
                $sql = $conn->prepare($string);
                $sql->execute();
            }
            catch(PDOException $PDOError)
            {
                $msgError = sprintf(error_consulta_no_realizada, $PDOError->getMessage(), $string, '');
            }
        }
    }
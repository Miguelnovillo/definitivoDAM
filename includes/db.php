<?php
    class DB{
        //Parametros de conexión
        private $host;
        private $db;
        private $userdb;
        private $passdb;
        private $charset; //Juego de caracteres

        //Métodos
        //rellenamos las variables de arriba con el constructor
        public function __construc(){
            $this->host='localhost';
            $this->db='ejemplo';
            $this->userdb='root';
            $this->passdb='';
            //$this->charset ='';
        }
        //conexion con la BD
        function connect(){
            try{
                $connection="mysql:host=127.0.0.1;dbname=ejemplo;charset=utf8mb4";
                //Para casos de error:
                $options=[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES =>false,
                ]; // En el modo depuración no sale errores

                //Conexion
                //$pdo = new PDO($connection,$this->userdb,$this->passdb,$options);
                $pdo = new PDO($connection,'root','',$options);
                return $pdo;
            }catch(PDOException $e){
                print_r('Error en la conexión: ' .$e->getMessage());
            }
        }
    }
?>
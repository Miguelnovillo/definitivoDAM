<?php
    //Nos traemos el fichero de conexión a la BD
    include 'db.php';

    class User extends DB{

        private $username;

        //Métodos
        //Comprobar si existe el usuario en la BD
        public function userExist($user,$pass){
            //Cifrado de contraseñas por seguridad, realiza una conversión
            $md5pass=md5($pass);
            $query = $this->connect()->prepare('SELECT * FROM clientes WHERE nombre=:user AND password=:pass');
            $query->execute(['user'=>$user,'pass'=>$md5pass]);

            //Si hay algo en la query...
            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        //Nos devuelve el nombre de la persona
        public function getNombre(){
            return $this->username;
        }

    }

?>
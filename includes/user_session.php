<?php

    class UserSession{
        //Métodos
        public function __construct(){
           session_start(); 
        }
        public function closeSession(){
            session_unset();
            session_destroy();
        }

        //Guardar usuario y obtenerlo
        public function setCurrentUser($user){
            $_SESSION['user']=$user;
        }

        public function getCurrentUser(){
            return $_SESSION['user'];
        }

    }

?>
<?php
    include_once 'includes/user.php';
    include_once 'includes/user_session.php';

    $userSession = new userSession();
    $user = new User();

    //MENU
    //PUBLICACIONES
    //FOOTER
    //HEADER
    //ALCAPARRA
    //Que ilusion mi primer push
    //no se que mas poner
    //AUSTRALIA

    if(isset($_SESSION['user'])){
        //Hay sesión si estamos aquí
        include_once 'vistas/home.php';
    }else if(isset($_POST['user']) && isset($_POST['pass'])){
        //Acabas de usar el formulario
        $userForm = $_POST['user'];
        $passForm = $_POST['pass'];

        $user = new User();

        if($user->userExist($userForm,$passForm)){
            //Si existe
            $userSession->setCurrentUser($userForm);
            include_once 'vistas/home.php';
        }else{
            //No existe
            $ErrorLogin = "Nombre de usuario y/o password incorrecto";
            include_once 'vistas/login.php';
        }
    }else{
        //Acabas de llegar
        include_once 'vistas/login.php';
    }

?>
<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE); //Usaremos esto para evitar que el usuario final vea errores
	//llamamos a nuestro controlador

    //dependiendo de los enlaces llamaremos al controlador para cargar una web u otra
    
    //llamamos al archivo del controlador
    require 'app/controller/mvc.controller.php';
    
    //se instancia al controlador 
	$mvc = new mvc_controller();
    
	if( $_GET['action'] == 'topBlogs' ){
			$mvc->topdiarios();	
	}
	else if( $_GET['action'] == 'genero' ){
			$mvc->genero();	
	}
	else if( $_GET['action'] == 'perfil' ){
		$mvc->perfil();	
	}
	else if( $_GET['action'] == 'registrarse' ){
        	$mvc->registrarse();	
	}
	else if( $_GET['action'] == 'login' ){
			$mvc->login();
	}
	else if( $_GET['action'] == 'logout' ){
			$mvc->logout();
	}
	else if( $_GET['action'] == 'buscar' ){
			$mvc->buscar();
	}else{	
		$mvc->principal();
	}
?>
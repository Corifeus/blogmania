<?php

    //////////////////////////////////////////////
    //MÉTODOS AUXILIARES GENERACiÓN DE PÁGINAS HTML
    //////////////////////////////////////////////


	/* METODO QUE CARGA LAS PARTES PRINCIPALES DE LA PAGINA WEB
	INPUT
		$title | titulo en string del header
	OUTPIT
		$pagina | string que contiene toda el cocigo HTML de la plantilla 
	*/
	function load_template($title='Sin Titulo'){

		//cargo la estructura de la página por defecto page.php y la guardo en $pagina
		$pagina = load_page('app/views/default/page.php');

		//actualización del TITULO de la página por defecto
		//1. reemplazo lo que hay en $titulo (parametro entrada) por la etiqueta #TITLE# que aparece en $pagina
		$pagina = replace_content('/\#TITLE\#/ms' ,$title , $pagina);	

		//Ya tengo mi página guardada en la variable $pagina y la devuelvo
		return $pagina;
	}

	
	/* METODO QUE CARGA UNA PAGINA DE LA SECCION VIEW Y LA MANTIENE EN MEMORIA
		INPUT
		$page | direccion de la pagina 
		OUTPUT
		STRING | devuelve un string con el codigo html cargado
	*/	
    function load_page($page){
		return file_get_contents($page);
	}
	
	/* METODO QUE ESCRIBE EL CODIGO PARA QUE SEA VISTO POR EL USUARIO
		INPUT
		$html | codigo html
		OUTPUT
		HTML | codigo html		
	*/
	function view_page($html){
		echo $html;
	}
	
	/* PARSEA LA PAGINA CON LOS NUEVOS DATOS ANTES DE MOSTRARLA AL USUARIO
		INPUT
		$out | es el codigo html con el que sera reemplazada la etiqueta CONTENIDO
		$pagina | es el codigo html de la pagina que contiene la etiqueta CONTENIDO
		OUTPUT
		HTML 	| cuando realiza el reemplazo devuelve el codigo completo de la pagina
	*/
	function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina){
		 return preg_replace($in, $out, $pagina);	 	
	}
	?>
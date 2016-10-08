<?php

require 'pageGenerator.php';

class mvc_controller {

	//////////////////////////////////////////////
    //MÉTODOS QUE MUESTRAN LAS PÁGINAS SECUNDARIAS DESPUÉS DE HABER INTERACTUADO CON LA PRINCIPAL//
    //////////////////////////////////////////////
   
	/* METODO QUE RECIBE LA ORDEN DE BUSQUEDA, PREPARA LOS DATOS Y SE COMUNICA
	     CON EL MODELO  PARA REALIZAR LA CONSULTA
		INPUT
		 $facultad | facultad de los usuarios a buscar
		 OUTPUT
		 HTML 	| el resultado obtenido del modelo es procesado y convertido en codigo html para que el VIEW pueda mostrarlo	
*/
   function principal()
   {
   		//creo una cadena con la página html con el título que yo quiera y la guardo en la variable $pagina 
		$pagina=load_template('Pagina Principal MVC');
		//en $html guardo el módulo principal				
		$html = load_page('app/views/default/modules/m.principal.php');
		//reemplazo la cadena #CONTENIDO# del $pagina por el $html de la página principal y guardo
		//la pagina resultante en $pagina
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
		//muestro la página
		view_page($pagina);
   }
  
	function buscar()
   {
   		//creo una cadena con la página html con el título que yo quiera y la guardo en la variable $pagina 
		$pagina=load_template('Buscar Blogs');
		//en $html guardo el módulo principal				
		$html = load_page('app/views/default/modules/m.buscador.php');
		//reemplazo la cadena #CONTENIDO# del $pagina por el $html de la página principal y guardo
		//la pagina resultante en $pagina
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
		//muestro la página
		view_page($pagina);
   }
}
?>
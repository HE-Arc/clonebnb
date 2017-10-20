<?php 
	/*
	 * Il faut ajouter ce fichier helper dans composer.json pour autoloader
	 *
	 */
	//helper pour marquer le menu actif
	if(!function_exists('set_active_route'))
	{
		//Si la fonction set_active_root n'existe pas on la crée
		function set_active_route($route)
		{
			//Route is. Si la coute es $route. Exemple $route = about
			return Route::is($route) ? 'active' : '';
		}
	}
?>
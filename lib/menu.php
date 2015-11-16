<?php
		/**
	*
	*	Menu : Generates the page menu
	*
	*@package lib 
	*@subpackage constructs
	*@author Marti Gómez
	*
	*
	*
	**/
	class menu
	{
		private $links=array();

			public function __construct($links)
			{
				$this->links=$links;
			}
			public function show()
			{
				echo '<ul>';
				foreach ($this->links as $clave => $valor) {
					echo '<li><a href="'.$valor.'">'.$clave.'</a></li>';
				}
				echo '</ul>';
			}
	}
?>
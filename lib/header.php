<?php
		/**
	*
	*	HEader : Generates the page header
	*
	*@package lib 
	*@subpackage constructs
	*@author Marti Gómez
	*
	*
	*
	**/

	class header
	{
		private $title;
		private $logo;

			public function __construct($css, $logo, $title)
			{
				$this->css=$css;
				$this->logo=$logo;
				$this->title=$title;
			}
			public function show()
			{
				$html=LAYOUT.$this->css.'</style></head><body>';
				echo $html;
				echo '<div id="titulo_logo">';
				echo '<img id="img_logo" width="100px" src="'.$this->logo.'">';
				echo '<h1>'.$this->title.'</h1>';
				echo '</div>';
			}
	}
?>
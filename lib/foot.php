<?php
		/**
	*
	*	Foot : Generates the page foot
	*
	*@package lib 
	*@subpackage constructs
	*@author Marti Gómez
	*
	*
	*
	**/

	class foot
	{
		private $end;

			public function __construct($end)
			{
				$this->end=$end;
			}
			public function show()
			{
				echo '<div id="footer">';

				echo '<p id="footer_text">'.$this->end.'</p>';

				echo '</div>';

				echo '</body>';
				
			}
	}
?>
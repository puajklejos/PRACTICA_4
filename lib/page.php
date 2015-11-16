<?php
/**
*
*	Page : generates one web page 
*
*@package lib
*@subpackage constructs
*@author Marti Gómez
*
*
**/
	class page
	{
		private $header;
		private $menu;
		private $content;
		private $foot;

		public function __construct($css, $logo, $title, $links, $section, $article, $end)
		{
			$this->header=new header($css, $logo, $title);
			$this->menu=new menu($links);
			$this->content=new content( $section, $article);
			$this->foot=new foot($end);		
		}
		public function show()
		{
			$this->header->show();
			$this->menu->show();
			$this->content->show();
			$this->foot->show();
		}
	}
?>
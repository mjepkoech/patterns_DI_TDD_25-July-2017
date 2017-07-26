<?php
//factory design method calcs
	class Shape
	{
		private $shapelength;
		private $shapewidth;
		//constructor
		public function __construct($length, $width)
		{
			$this->shapelength = $length;
			$this->shapewidth = $width;
		}

		//function to calculate the area of the shape
		public function getArea()
		{
			$shapearea= $this->length * $this->width;
			return $shapearea;
		}
	}
?>

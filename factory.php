<?php
//factory design method calcs
	class shape
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
	class shapecalcsfactory
	{
		public static function definedimensions($length, $width)
		{
			return new shapecalcs($length, $width);
		}
	}

	//have the factory define the shapecalcs object and calculate the area
	$rectangle = shapecalcsfactory::definedimensions(4, 6);
	print_r($rectangle->getArea());
?>

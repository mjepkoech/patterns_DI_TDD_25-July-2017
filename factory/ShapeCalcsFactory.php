<?php
namespace factory;
require_once 'Shape.php';

	class ShapeCalcsFactory
	{
		public static function definedimensions($length, $width)
		{
			return new shapecalcs($length, $width);
		}
	}

	//have the factory define the shapecalcs object and calculate the area
	$rectangle = ShapeCalcsFactory::definedimensions(4, 6);
	print_r($rectangle->getArea());
?>

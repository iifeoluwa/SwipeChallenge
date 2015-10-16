<?php

/**
* Converter classs to handle conversions from Array to JSON and JSON to Array.
* Written by Arowosegbe Ifeoluwa
* For: Swipe Challenge
*/

class Converter
{

	
	
	public function jsonToArray($jsonString)
	{
		//Decode passed json string to an array.
		
		$array = json_decode($jsonString, true);
		
		return $array;
		
	}

	public function arrayToJson($arrayData)
	{
		//Make a json string out of the array passed to it.

		$jsonResult = json_encode($arrayData, JSON_UNESCAPE D_UNICODE | JSON_NUMERIC_CHECK);
		
		return $jsonResult;
	}


}


?>

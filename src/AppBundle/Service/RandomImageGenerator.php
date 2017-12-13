<?php

namespace AppBundle\Service;

/**
* 
*/
class RandomImageGenerator
{
	
	function __construct($keywords)
	{
		$this->keywords = $keywords;
	}

	public function getRandomImage(){
		return "https://loremflickr.com/320/240".$this->keywords[array_rand($this->keywords)];
	}

}
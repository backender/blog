<?php
namespace Backender\BlogBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller;

class PostService
{
	public $slug;
	public function createSlug($str)
	{
		$str = strtolower(trim($str));
		$str = preg_replace('/[^a-z0-9-]/', '-', $str);
		$str = preg_replace('/-+/', "-", $str);
		$slug = $str;
		
		return $slug;
	}	
}
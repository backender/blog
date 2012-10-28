<?php
namespace Backender\BlogBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller;

class PostService
{
	private $slug;
	
	public function createSlug($title)
	{
		$title = strtolower(trim($title));
		$title = preg_replace('/[^a-z0-9-]/', '-', $title);
		$title = preg_replace('/-+/', "-", $title);
		$slug = $title;
		
		return $slug;
	}	
}
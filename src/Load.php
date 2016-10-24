<?php
namespace ListingSchema;
class Load {
	private static $instance;
	public static function getInstance()
	{
		if (null === static::$instance) {
			static::$instance = new static();
		}
		
		return static::$instance;
	}
	
	public function load(){
		return file_get_contents('listing.json');
	}
	
	protected function __construct()
	{
	}
	

	
}
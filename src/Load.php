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
	
	public function load($path = null){
		if($path) {
			return file_get_contents($path);
		} else {
			return file_get_contents(__DIR__ . '/listing.json');
		}
	}
	
	protected function __construct()
	{
	}
	

	
}
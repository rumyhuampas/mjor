<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Socio {

	public static function exists($name){
		$socio = ORM::factory('socio')->where('Name', '=', $name)->find();
		return $socio->loaded();
	}
	
	public static function get($name = NULL){
		if($name != NULL){
			return ORM::factory('socio')
				->where('Name', '=', $name)->find();
		}
		else{
			return ORM::factory('socio')
				->order_by('Name')
				->find_all();
		}
	}
}
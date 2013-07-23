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
	
	public static function getActive($name = NULL){
		if($name != NULL){
			return ORM::factory('socio')
				->where('Name', '=', $name)
				->and_where('Active', '=', Helpers_Const::ITEMACTIVE)
				->find();
		}
		else{
			return ORM::factory('socio')
				->where('Active', '=', Helpers_Const::ITEMACTIVE)
				->order_by('Name')
				->find_all();
		}
	}
}
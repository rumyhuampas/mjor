<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Tarifa {

	public static function exists($name){
		$tarifa = ORM::factory('tarifa')->where('Name', '=', $name)->find();
		return $tarifa->loaded();
	}
	
	public static function get($name = NULL){
		if($name != NULL){
			return ORM::factory('tarifa')
				->where('Name', '=', $name)->find();
		}
		else{
			return ORM::factory('tarifa')
				->order_by('Name')
				->find_all();
		}
	}
	
	public static function getActive($name = NULL){
		if($name != NULL){
			return ORM::factory('tarifa')
				->where('Name', '=', $name)
				->and_where('Active', '=', Helpers_Const::ITEMACTIVE)
				->find();
		}
		else{
			return ORM::factory('tarifa')
				->where('Active', '=', Helpers_Const::ITEMACTIVE)
				->order_by('Name')
				->find_all();
		}
	}
}
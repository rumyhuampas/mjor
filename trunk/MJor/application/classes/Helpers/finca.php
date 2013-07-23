<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Finca {

	public static function exists($name){
		$finca = ORM::factory('finca')->where('Name', '=', $name)->find();
		return $finca->loaded();
	}
	
	public static function get($name = NULL){
		if($name != NULL){
			return ORM::factory('finca')
				->where('Name', '=', $name)->find();
		}
		else{
			return ORM::factory('finca')
				->order_by('Name')
				->find_all();
		}
	}
	
	public static function getActive($name = NULL){
		if($name != NULL){
			return ORM::factory('finca')
				->where('Name', '=', $name)
				->and_where('Active', '=', Helpers_Const::ITEMACTIVE)
				->find();
		}
		else{
			return ORM::factory('finca')
				->where('Active', '=', Helpers_Const::ITEMACTIVE)
				->order_by('Name')
				->find_all();
		}
	}
}
<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Empleado {

	public static function exists($dni){
		$empleado = ORM::factory('empleado')->where('DNI', '=', $dni)->find();
		return $empleado->loaded();
	}
	
	public static function get($dni = NULL){
		if($dni != NULL){
			return ORM::factory('empleado')
				->where('DNI', '=', $dni)->find();
		}
		else{
			return ORM::factory('empleado')
				->order_by('Name')
				->find_all();
		}
	}
	
	public static function getActive($dni = NULL){
		if($dni != NULL){
			return ORM::factory('empleado')
				->where('DNI', '=', $dni)
				->and_where('Active', '=', Helpers_Const::ITEMACTIVE)
				->find();
		}
		else{
			return ORM::factory('empleado')
				->where('Active', '=', Helpers_Const::ITEMACTIVE)
				->order_by('Name')
				->find_all();
		}
	}
}
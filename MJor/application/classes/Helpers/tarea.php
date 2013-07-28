<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Tarea {

	public static function exists($name){
		$tarea = ORM::factory('tarea')->where('Name', '=', $name)->find();
		return $tarea->loaded();
	}
	
	public static function get($name = NULL){
		if($name != NULL){
			return ORM::factory('tarea')
				->where('Name', '=', $name)->find();
		}
		else{
			return ORM::factory('tarea')
				->order_by('Name')
				->find_all();
		}
	}
	
	public static function getActive($name = NULL){
		if($name != NULL){
			return ORM::factory('tarea')
				->where('Name', '=', $name)
				->and_where('Active', '=', Helpers_Const::ITEMACTIVE)
				->find();
		}
		else{
			return ORM::factory('tarea')
				->where('Active', '=', Helpers_Const::ITEMACTIVE)
				->order_by('Name')
				->find_all();
		}
	}
	
	public static function getForAuto(){
		$data = DB::select('name')
			->from('tareas')
			->where('Active', '=', Helpers_Const::ITEMACTIVE)
			->order_by('Name', 'ASC')
			->execute();
		$jsonarray = array();
		for($i=0; $i<count($data); $i++){
			array_push($jsonarray, $data[$i]['name']);
		}
		return $jsonarray;
	}
}
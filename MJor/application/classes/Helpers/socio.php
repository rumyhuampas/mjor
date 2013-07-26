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
	
	public static function getForCombo(){
		return DB::select('id', 'name')
			->from('socios')
			->where('Active', '=', Helpers_Const::ITEMACTIVE)
			->order_by('Name', 'ASC')
			->execute()->as_array('id', 'name');
	}
	
	public static function getForAuto(){
		$data = DB::select('name')
			->from('socios')
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
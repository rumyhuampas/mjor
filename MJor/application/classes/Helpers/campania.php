<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Campania {

	public static function exists($name){
		$campania = ORM::factory('campania')->where('Name', '=', $name)->find();
		return $campania->loaded();
	}
	
	public static function get($name = NULL){
		if($name != NULL){
			return ORM::factory('campania')
				->where('Name', '=', $name)->find();
		}
		else{
			return ORM::factory('campania')
				->order_by('Name')
				->find_all();
		}
	}
	
	public static function getActive($name = NULL){
		if($name != NULL){
			return ORM::factory('campania')
				->where('Name', '=', $name)
				->and_where('Active', '=', Helpers_Const::ITEMACTIVE)
				->find();
		}
		else{
			return ORM::factory('campania')
				->where('Active', '=', Helpers_Const::ITEMACTIVE)
				->order_by('Name')
				->find_all();
		}
	}
	
	public static function getForAuto(){
		$data = DB::select('name')
			->from('campanias')
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
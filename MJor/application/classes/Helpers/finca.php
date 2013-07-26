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
	
	public static function getForCombo(){
		return DB::select('id', 'name')
			->from('fincas')
			->where('Active', '=', Helpers_Const::ITEMACTIVE)
			->order_by('Name', 'ASC')
			->execute()->as_array('id', 'name');
	}
	
	public static function getForAuto(){
		$data = DB::select('name')
			->from('fincas')
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
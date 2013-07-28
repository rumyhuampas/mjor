<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Vale {
	
	public static function get(){
		return ORM::factory('vale')
			->order_by('date')
			->find_all();
	}
}
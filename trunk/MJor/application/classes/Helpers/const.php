<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Const {
	/******** APLICACION *********/
	const APPNAME = 'JorMan';
	
	const ITEMACTIVE = 'Y';
	const ITEMINACTIVE = 'N';
	
	/******** MENU *********/
	const MENUINICIOID = '0';
	const MENUOPERID = '1';
	const MENUABMID = '2';
	const MENUREPOID = '3';
	
	/******** SUBMENU *********/
	const MENUABMFINCASID = '0';
	const MENUABMSOCIOSID = '1';
	const MENUABMCAMPANASID = '2';
	const MENUABMTAREASID = '3';
	const MENUABMTARIFASID = '4';
	const MENUABMEMPLEADOSID = '5';
    
    const MENUOPERPARTEID = '0';
	
	const MENUREPOVALESID = '0';
	
	const MENUINICIOTITLE = 'Inicio';
	const MENUOPERTITLE = 'Operaciones';
	const MENUABMTITLE = 'Abm';
	const MENUREPOTITLE = 'Reportes';
	
	public static function getNumbersArray($amount){
		$numbers = array();
		for($i=0;$i<=$amount;$i++){
			array_push($numbers, $i);
		}
		return $numbers;
	}
}
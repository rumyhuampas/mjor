<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Partes extends Controller {

	public function action_index()
	{
		$view=View::factory('partes');
		$view->_title = Helpers_Const::APPNAME.' - Operaciones';
		$view->_menuid = Helpers_Const::MENUOPERID;
        $view->_submenuid = Helpers_Const::MENUOPERPARTEID;
		$view->_menutitle = Helpers_Const::MENUOPERTITLE;
		$this->response->body($view->render());
	}
	
	public function action_getAutoFincas(){
		echo json_encode(Helpers_Finca::getForAuto());
	}
	
	public function action_getAutoTareas(){
		echo json_encode(Helpers_Tarea::getForAuto());
	}
	
	public function action_getAutoCampanias(){
		echo json_encode(Helpers_Campania::getForAuto());
	}
	
	public function action_getAutoTarifas(){
		echo json_encode(Helpers_Tarifa::getForAuto());
	}
	
	public function action_search(){
		if(isset($_POST['searchdni'])){
			$view = View::factory('partes');
			$view->_title = Helpers_Const::APPNAME." - Operaciones";
			$view->_menuid = Helpers_Const::MENUOPERID;
        	$view->_submenuid = Helpers_Const::MENUOPERPARTEID;
			$view->_menutitle = Helpers_Const::MENUOPERTITLE;
			
			$_empleado = Helpers_Empleado::get($_POST['searchdni']);
			$view->_empleado = $_empleado;
			if($_empleado->loaded()){
				$this->response->body($view->render());
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'partes', 'action' => 'index',
					'msgtype' => 'msg_Alert', 'msgtext' => 'El empleado no existe.')));
			}
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'partes', 'action' => 'index',
				'msgtype' => 'msg_Alert', 'msgtext' => 'El empleado no existe.')));
		}
	}

} // End Welcome

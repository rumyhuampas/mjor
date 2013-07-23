<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tarifas extends Controller {

	public function action_index()
	{
		$view=View::factory('tarifas');
		$view->_title = Helpers_Const::APPNAME.' - ABM';
		$view->_menuid = Helpers_Const::MENUABMID;
		$view->_submenuid = Helpers_Const::MENUABMTARIFASID;
		$view->_menutitle = Helpers_Const::MENUABMTITLE;
		$view->_tarifas = Helpers_Tarifa::get();
		$this->response->body($view->render());
	}
	
	public function action_new(){
		if(!isset($_POST['name'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'tarifas', 'action' => 'index')));
		}
		else{
			if(!Helpers_Tarifa::exists($_POST['name'])){
				$tarifa = ORM::factory('tarifa');
				$tarifa->Name = $_POST['name'];
				$tarifa->Value = $_POST['value'];
				$tarifa->Active = Helpers_Const::ITEMACTIVE;
				$tarifa->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'tarifas', 'action' => 'index',
					'msgtype' => 'msg_Success', 'msgtext' => 'Tarifa agregada con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'tarifas', 'action' => 'index',
					'msgtype' => 'msg_Error', 'msgtext' => 'La tarifa ya existe.')));
			}	
		}
	}
	
	public function action_changeactive(){
		if ($this->request->is_ajax()) {
			$id = $_POST['id'];
			$active = Helpers_Const::ITEMINACTIVE;
			if($_POST['active'] == 'true'){
				$active = Helpers_Const::ITEMACTIVE;
			}
			
			$tarifa = ORM::factory('tarifa', $id);
			if($tarifa->loaded()){
				$tarifa->Active = $active;
				$tarifa->update();
			}
		}
	}

} // End Welcome

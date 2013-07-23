<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Fincas extends Controller {

	public function action_index()
	{
		$view=View::factory('fincas');
		$view->_title = Helpers_Const::APPNAME.' - ABM';
		$view->_menuid = Helpers_Const::MENUABMID;
		$view->_submenuid = Helpers_Const::MENUABMFINCASID;
		$view->_menutitle = Helpers_Const::MENUABMTITLE;
		$view->_fincas = Helpers_Finca::get();
		$this->response->body($view->render());
	}
	
	public function action_new(){
		if(!isset($_POST['name'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'fincas', 'action' => 'index')));
		}
		else{
			if(!Helpers_Finca::exists($_POST['name'])){
				$finca = ORM::factory('finca');
				$finca->Name = $_POST['name'];
				$finca->Active = Helpers_Const::ITEMACTIVE;
				$finca->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'fincas', 'action' => 'index',
					'msgtype' => 'msg_Success', 'msgtext' => 'Finca agregada con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'fincas', 'action' => 'index',
					'msgtype' => 'msg_Error', 'msgtext' => 'La finca ya existe.')));
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
			
			$finca = ORM::factory('finca', $id);
			if($finca->loaded()){
				$finca->Active = $active;
				$finca->update();
			}
		}
	}

} // End Welcome

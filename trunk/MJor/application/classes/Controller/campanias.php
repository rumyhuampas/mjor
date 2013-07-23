<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Campanias extends Controller {

	public function action_index()
	{
		$view=View::factory('campanias');
		$view->_title = Helpers_Const::APPNAME.' - ABM';
		$view->_menuid = Helpers_Const::MENUABMID;
		$view->_submenuid = Helpers_Const::MENUABMCAMPANASID;
		$view->_menutitle = Helpers_Const::MENUABMTITLE;
		$view->_campanias = Helpers_Campania::get();
		$this->response->body($view->render());
	}
	
	public function action_new(){
		if(!isset($_POST['name'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'campanias', 'action' => 'index')));
		}
		else{
			if(!Helpers_Campania::exists($_POST['name'])){
				$campania = ORM::factory('campania');
				$campania->Name = $_POST['name'];
				$campania->Active = Helpers_Const::ITEMACTIVE;
				$campania->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'campanias', 'action' => 'index',
					'msgtype' => 'msg_Success', 'msgtext' => 'Campana agregada con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'campanias', 'action' => 'index',
					'msgtype' => 'msg_Error', 'msgtext' => 'La campana ya existe.')));
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
			
			$campania = ORM::factory('campania', $id);
			if($campania->loaded()){
				$campania->Active = $active;
				$campania->update();
			}
		}
	}

} // End Welcome

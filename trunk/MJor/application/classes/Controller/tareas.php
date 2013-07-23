<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tareas extends Controller {

	public function action_index()
	{
		$view=View::factory('tareas');
		$view->_title = Helpers_Const::APPNAME.' - ABM';
		$view->_menuid = Helpers_Const::MENUABMID;
		$view->_submenuid = Helpers_Const::MENUABMTAREASID;
		$view->_menutitle = Helpers_Const::MENUABMTITLE;
		$view->_tareas = Helpers_Tarea::get();
		$this->response->body($view->render());
	}
	
	public function action_new(){
		if(!isset($_POST['name'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'tareas', 'action' => 'index')));
		}
		else{
			if(!Helpers_Tarea::exists($_POST['name'])){
				$tarea = ORM::factory('tarea');
				$tarea->Name = $_POST['name'];
				$tarea->Active = Helpers_Const::ITEMACTIVE;
				$tarea->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'tareas', 'action' => 'index',
					'msgtype' => 'msg_Success', 'msgtext' => 'Tarea agregada con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'tareas', 'action' => 'index',
					'msgtype' => 'msg_Error', 'msgtext' => 'La tarea ya existe.')));
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
			
			$tarea = ORM::factory('tarea', $id);
			if($tarea->loaded()){
				$tarea->Active = $active;
				$tarea->update();
			}
		}
	}

} // End Welcome

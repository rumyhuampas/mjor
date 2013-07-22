<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Socios extends Controller {

	public function action_index()
	{
		$view=View::factory('socios');
		$view->_title = Helpers_Const::APPNAME.' - ABM';
		$view->_menuid = Helpers_Const::MENUABMID;
		$view->_submenuid = Helpers_Const::MENUABMSOCIOSID;
		$view->_menutitle = Helpers_Const::MENUABMTITLE;
		$view->_socios = Helpers_Socio::get();
		$this->response->body($view->render());
	}
	
	public function action_new(){
		if(!isset($_POST['name'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'socios', 'action' => 'index')));
		}
		else{
			if(!Helpers_Socio::exists($_POST['name'])){
				$socio = ORM::factory('socio');
				$socio->Name = $_POST['name'];
				$socio->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'socios', 'action' => 'index',
					'msgtype' => 'msg_Success', 'msgtext' => 'Socio agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'socios', 'action' => 'index',
					'msgtype' => 'msg_Error', 'msgtext' => 'El socio ya existe.')));
			}	
		}
	}

} // End Welcome

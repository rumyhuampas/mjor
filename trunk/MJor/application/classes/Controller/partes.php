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

} // End Welcome

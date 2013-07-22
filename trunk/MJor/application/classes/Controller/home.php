<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$view=View::factory('home');
		$view->_title = Helpers_Const::APPNAME.' - Inicio';
		$view->_menuid = Helpers_Const::MENUINICIOID;
		$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		//$view->lastmodif = Helpers_Cerda::getLastModifications();
		//$view->maxweights = Helpers_Cerda::getMaxWeights();
		$this->response->body($view->render());
	}

} // End Welcome

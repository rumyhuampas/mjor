<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller {

	public function action_index()
	{
		$view=View::factory('vales');
		$view->_title = Helpers_Const::APPNAME.' - Reportes';
		$view->_menuid = Helpers_Const::MENUREPOID;
        $view->_submenuid = Helpers_Const::MENUREPOVALESID;
		$view->_menutitle = Helpers_Const::MENUREPOTITLE;
		$view->_vales = Helpers_Vale::get();
		$view->_valeid = $this->request->param('id');
		$this->response->body($view->render());
	}
	
	public function action_newvale(){
		if(isset($_POST['text']) && $_POST['text'] != ''){
			$vale = ORM::factory('vale');
			$vale->date = DateTime::createFromFormat('d/m/Y H:i:s', $_POST['date'])->format('Y-m-d H:i:s');
			$vale->text = $_POST['text'];
			$vale->create();
			
			HTTP::redirect(Route::get('msgid')->uri(array('controller' => 'reportes', 'action' => 'index',
				'id' => $vale->Id, 'msgtype' => 'msg_Success', 'msgtext' => 'Vale agregado con exito.')));
		}
		else{
			HTTP::redirect(Route::get('msg')->uri(array('controller' => 'reportes', 'action' => 'index',
				'msgtype' => 'msg_Error', 'msgtext' => 'Debe completar todos los campos.')));
		}
	}
	
	public function action_printvale(){
		$vale = ORM::factory('vale', $_POST['valeid']);
		if($vale->loaded()){
			$pdf = Helpers_Reportes::createVale($vale->Id, $vale->date, $vale->text);
			$this->response->headers(array('Content-Type' => 'application/pdf'));
			Helpers_Reportes::show($pdf);
		}
		else{
			//errorpdf
		}
	}
}
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
		$this->response->body($view->render());
	}
	
	public function action_newvale(){
		if ($this->request->is_ajax()) {
			$result = array();
			if(isset($_POST['text']) && $_POST['text'] != ''){
				$vale = ORM::factory('vale');
				$vale->date = DateTime::createFromFormat('d/m/Y', $_POST['date'])->format('Y-m-d');
				$vale->text = $_POST['text'];
				$vale->create();
				
				array_push($result, $vale->Id);
				array_push($result, URL::base().Route::get('msg')->uri(array('controller' => 'reportes', 'action' => 'index',
					'msgtype' => 'msg_Success', 'msgtext' => 'Vale agregado con exito.')));
				echo json_encode($result);
			}
			else{
				array_push($result, NULL);
				array_push($result, URL::base().Route::get('msg')->uri(array('controller' => 'reportes', 'action' => 'index',
					'msgtype' => 'msg_Error', 'msgtext' => 'Debe completar todos los campos.')));
				echo json_encode($result);
			}
		}
		else{
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'reportes', 'action' => 'index')));
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
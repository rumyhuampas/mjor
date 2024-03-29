<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Empleados extends Controller {

	public function action_index()
	{
		$view=View::factory('empleados');
		$view->_title = Helpers_Const::APPNAME.' - ABM';
		$view->_menuid = Helpers_Const::MENUABMID;
		$view->_submenuid = Helpers_Const::MENUABMEMPLEADOSID;
		$view->_menutitle = Helpers_Const::MENUABMTITLE;
		$view->_empleados = Helpers_Empleado::get();
		$this->response->body($view->render());
	}
	
	public function action_getAutoSocios(){
		echo json_encode(Helpers_Socio::getForAuto());
	}
	
	public function action_getAutoTarifas(){
		echo json_encode(Helpers_Tarifa::getForAuto());
	}
	
	public function action_getAutoFincas(){
		echo json_encode(Helpers_Finca::getForAuto());
	}
	
	public function action_new(){
		if(!isset($_POST['name'])){
			HTTP::redirect(Route::get('default')->uri(array('controller' => 'empleados', 'action' => 'index')));
		}
		else{
			if(!Helpers_Empleado::exists($_POST['dni'])){
				$empleado = ORM::factory('empleado');
				$empleado->Name = $_POST['name'];
				$empleado->Address = $_POST['address'];
				$empleado->DNI = $_POST['dni'];
				$empleado->CUIL = $_POST['cuil'];
				$empleado->EntryDate = DateTime::createFromFormat('d/m/Y', $_POST['entrydate'])->format('Y-m-d');
				$empleado->BookNumber = $_POST['booknumber'];
				$empleado->PageNumber = $_POST['pagenumber'];
				$empleado->Active = Helpers_Const::ITEMACTIVE;
				$empleado->SocioId = Helpers_Socio::get($_POST['socio'])->Id;
				$empleado->TarifaId = Helpers_Tarifa::get($_POST['tarifa'])->Id;
				$empleado->TarifaEspId = Helpers_Tarifa::get($_POST['tarifaesp'])->Id;
				$empleado->FincaTrabId = Helpers_Finca::get($_POST['fincatrab'])->Id;
				$empleado->FincaCobroId = Helpers_Finca::get($_POST['fincacobro'])->Id;
				$empleado->CreatedOn = DB::expr('Now()');
				$empleado->ModifiedOn = DB::expr('Now()');
				$empleado->create();
				
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'empleados', 'action' => 'index',
					'msgtype' => 'msg_Success', 'msgtext' => 'Empleado agregado con exito.')));
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'empleados', 'action' => 'index',
					'msgtype' => 'msg_Error', 'msgtext' => 'El empleado ya existe.')));
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
			
			$empleado = ORM::factory('empleado', $id);
			if($empleado->loaded()){
				$empleado->Active = $active;
				$empleado->update();
			}
		}
	}

} // End Welcome

<ul>
	<li id=<?php echo Helpers_Const::MENUABMFINCASID; ?> submenuid=<?php echo $_submenuid ?>>
		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'fincas', 'action' => 'index')); ?>>
			<span class="iconsweet">a</span>Fincas
		</a>
	</li>
	<li id=<?php echo Helpers_Const::MENUABMSOCIOSID; ?> submenuid=<?php echo $_submenuid ?>>
		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'socios', 'action' => 'index')); ?>>
			<span class="iconsweet">k</span>Socios
		</a>
	</li>
	<li id=<?php echo Helpers_Const::MENUABMCAMPANASID; ?> submenuid=<?php echo $_submenuid ?>>
		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'campanias', 'action' => 'index')); ?>>
			<span class="iconsweet">o</span>Campanas
		</a>
	</li>
	<li id=<?php echo Helpers_Const::MENUABMTAREASID; ?> submenuid=<?php echo $_submenuid ?>>
		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'tareas', 'action' => 'index')); ?>>
			<span class="iconsweet">S</span>Tareas
		</a>
	</li>
	<li id=<?php echo Helpers_Const::MENUABMTARIFASID; ?> submenuid=<?php echo $_submenuid ?>>
		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'tarifas', 'action' => 'index')); ?>>
			<span class="iconsweet">S</span>Tarifas
		</a>
	</li>
	<li id=<?php echo Helpers_Const::MENUABMEMPLEADOSID; ?> submenuid=<?php echo $_submenuid ?>>
		<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'empleados', 'action' => 'index')); ?>>
			<span class="iconsweet">f</span>Empleados
		</a>
	</li>
</ul>
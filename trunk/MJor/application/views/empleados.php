<?php include Kohana::find_file('views', '_header'); ?>

<?php include Kohana::find_file('views', '_headerbar'); ?>

<script src=<?php echo URL::base()."/scripts/custom/empleados.js" ?> type="text/javascript"></script>

<!--Dreamworks Container-->
<div id="dreamworks_container">
    
    <?php include Kohana::find_file('views', '_primarymenu'); ?>
    
	<!--Main Content-->
	<section id="main_content">

		<?php include Kohana::find_file('views', '_secondarymenu'); ?>

		<!--Content Wrap-->
		<div id="content_wrap">	
			
			<?php include Kohana::find_file('views', '_headerinfo'); ?>
			
			<?php include Kohana::find_file('views', '_headeractions'); ?>	                  

			<?php include Kohana::find_file('views', '_msg'); ?>
	        
			<!--One_Wrap-->
		 	<div class="one_wrap fl_left">
		    	<div class="widget">
		        	<div class="widget_title"><span class="iconsweet">a</span><h5>Nuevo Empleado</h5></div>
		            <div class="widget_body">
						<!--Form fields-->		                
		                <?php echo Form::open('empleados/new', array('method' => 'POST'));
		                	echo '<ul class="form_fields_container one_two_wrap fl_left">';
								echo "<li>";
		                    		echo Form::label('dni', 'DNI');
									echo '<div class="form_input">';
									echo Form::input('dni', '', array('type' => 'text', 'id' => 'dni'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_right">';
								echo '<li>';
		                    		echo Form::label('cuil', 'CUIL');
									echo '<div class="form_input">';
									echo Form::input('cuil', '', array('type' => 'text', 'id' => 'cuil'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_left">';
								echo "<li>";
		                    		echo Form::label('name', 'Nombre');
									echo '<div class="form_input">';
									echo Form::input('name', '', array('type' => 'text', 'id' => 'name'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_right">';
								echo "<li>";
		                    		echo Form::label('address', 'Direccion');
									echo '<div class="form_input">';
									echo Form::input('address', '', array('type' => 'text', 'id' => 'address'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_left">';
								echo "<li>";
		                    		echo Form::label('booknumber', 'Numero de libro');
									echo '<div class="form_input">';
									echo Form::input('booknumber', '', array('type' => 'text', 'id' => 'booknumber'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_right">';
								echo "<li>";
		                    		echo Form::label('pagenumber', 'Numero de hoja');
									echo '<div class="form_input">';
									echo Form::input('pagenumber', '', array('type' => 'text', 'id' => 'pagenumber'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_left">';
								echo "<li>";
		                    		echo Form::label('entrydate', 'Fecha ingreso');
									echo '<div class="form_input">';
									echo Form::input('entrydate', date("d/m/Y"), array('type' => 'text', 'readonly','id' => 'datepicker'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_right">';
								echo "<li>";
		                    		echo Form::label('socio', 'Socio');
									echo '<div class="form_input">';
									echo '<input name="socio" id="socio">';
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_left">';
								echo "<li>";
		                    		echo Form::label('tarifa', 'Tarifa');
									echo '<div class="form_input">';
									echo '<input name="tarifa" id="tarifa">';
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_right">';
								echo "<li>";
		                    		echo Form::label('tarifaesp', 'Tarifa especial');
									echo '<div class="form_input">';
									echo '<input name="tarifaesp" id="tarifaesp">';
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_left">';
								echo "<li>";
		                    		echo Form::label('fincatrab', 'Finca de trabajo');
									echo '<div class="form_input">';
									echo '<input name="fincatrab" id="fincatrab">';
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container one_two_wrap fl_right">';
								echo "<li>";
		                    		echo Form::label('fincacobro', 'Finca de cobro');
									echo '<div class="form_input">';
									echo '<input name="fincacobro" id="fincacobro">';
		                        	echo '</div>';
								echo "</li>";
		                    echo '</ul>';
		                    echo '<ul class="form_fields_container"><li></li></ul>';
		                    
		                    echo '<div class="action_bar">';
		                    	echo Form::button('btnsave', '<span class="iconsweet">=</span>Guardar', array('class' => 'button_small bluishBtn fl_right'));
								echo "<br class='clear' />";
		                    echo '</div>';
		                echo Form::close();
						?>
		            </div>
		        </div>
		    </div>
		    
		    <!--One_Wrap-->
		 	<div class="one_wrap">
		    	<div class="widget">
		        	<div class="widget_title"><span class="iconsweet">f</span><h5>Empleados</h5></div>
		            <div class="widget_body">
		            	<!--Activity Table-->
		            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
		                    <tr>
		                        <th width="8%">ID</th>
		                        <th width="10%">DNI</th>
		                        <th width="20%">CUIL</th>
		                        <th width="41%">NOMBRE</th>
		                        <th width="8%">LIBRO</th>
		                        <th width="8%">HOJA</th>
		                        <th width="5%">ACTIVO</th>
		                    </tr>
		                    <?php
		                    if(isset($_empleados)){
		                    	foreach($_empleados as $empleado){
		                    		echo "<tr>";
		                    			echo "<td>".$empleado->Id."</td>";
										echo "<td>".$empleado->DNI."</td>";
										echo "<td>".$empleado->CUIL."</td>";
										echo "<td>".$empleado->Name."</td>";
										echo "<td>".$empleado->BookNumber."</td>";
										echo "<td>".$empleado->PageNumber."</td>";
										echo "<td>";
											echo "<input type='checkbox' style='opacity: 0;' name='active' id='".$empleado->Id."'";
											if($empleado->Active == Helpers_Const::ITEMACTIVE)
											{ echo " checked>"; }
											else{ echo ">"; }
										echo "</td>";
									echo "</tr>";
		                    	}
		                    }
		                    ?>
		                </table>
						<div class="action_bar">
		                    <a class="button_small whitishBtn" href="#"><span class="iconsweet">l</span>Exportar</a>
		                </div>
		            </div>
		        </div>
		    </div>
		    
		 	<br class="clear" />   
		              
		</div><!--Content Wrap-->
	
	</section><!--Main Content-->
	
</div><!--Dreamworks Container-->

<?php include Kohana::find_file('views', '_footer'); ?>
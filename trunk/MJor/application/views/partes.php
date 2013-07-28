<?php include Kohana::find_file('views', '_header'); ?>

<?php include Kohana::find_file('views', '_headerbar'); ?>

<script src=<?php echo URL::base()."/scripts/custom/partes.js" ?> type="text/javascript"></script>

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
		        	<div class="widget_title"><span class="iconsweet">r</span><h5>Buscar empleado</h5></div>
		            <div class="widget_body">
						<!--Form fields-->		                
		                <?php echo Form::open('partes/search', array('method' => 'POST'));
		                	echo '<ul class="form_fields_container">';
								echo "<li>";
		                    		echo Form::label('searchdni', 'DNI');
									echo '<div class="form_input">';
									echo Form::input('searchdni', '', array('type' => 'text', 'style' => 'width:20%;', 'id' => 'searchdni'));
									echo Form::button('btnsearch', 'Buscar', array('class' => 'button_small whitishBtn'));
		                        	echo '</div>';
								echo "</li>";
		                    echo '</ul>';
		                echo Form::close();
						?>
		            </div>
		        </div>
		    </div>
		    
		    <?php if(isset($_empleado) && $_empleado->loaded()){?>
			    <!--One_Wrap-->
			 	<div class="one_wrap fl_left">
			    	<div class="widget">
			        	<div class="widget_title"><span class="iconsweet">r</span><h5>Nuevo Parte Diario</h5></div>
			            <div class="widget_body">
							<!--Form fields-->		                
			                <?php echo Form::open('partes/new', array('method' => 'POST'));
								echo '<ul class="form_fields_container one_two_wrap fl_left">';
									echo "<li>";
			                    		echo Form::label('dni', 'DNI');
										echo '<div class="form_input">';
										echo Form::input('dni', $_empleado->DNI, array('type' => 'text', 'id' => 'dni', 'disabled'));
			                        	echo '</div>';
									echo "</li>";
								echo '</ul>';
								echo '<ul class="form_fields_container one_two_wrap fl_right">';
									echo "<li>";
			                    		echo Form::label('name', 'Nombre');
										echo '<div class="form_input">';
										echo Form::input('name', $_empleado->Name, array('type' => 'text', 'id' => 'name', 'disabled'));
			                        	echo '</div>';
									echo "</li>";
								echo '</ul>';
								echo '<ul class="form_fields_container one_two_wrap fl_left">';
									echo "<li>";
			                    		echo Form::label('date', 'Fecha');
										echo '<div class="form_input">';
										echo Form::input('date', date("d/m/Y"), array('type' => 'text', 'readonly','id' => 'datepicker'));
			                        	echo '</div>';
									echo "</li>";
			                    echo '</ul>';
			                    echo '<ul class="form_fields_container one_two_wrap fl_right">';
									echo "<li>";
			                    		echo Form::label('finca', 'Finca');
										echo '<div class="form_input">';
										echo '<input name="finca" id="finca">';
			                        	echo '</div>';
									echo "</li>";
								echo '</ul>';
								echo '<ul class="form_fields_container one_two_wrap fl_left">';
									echo "<li>";
			                    		echo Form::label('tarea', 'Tarea');
										echo '<div class="form_input">';
										echo '<input name="tarea" id="tarea">';
			                        	echo '</div>';
									echo "</li>";
								echo '</ul>';
								echo '<ul class="form_fields_container one_two_wrap fl_right">';
									echo "<li>";
			                    		echo Form::label('campania', 'Campania');
										echo '<div class="form_input">';
										echo '<input name="campania" id="campania">';
			                        	echo '</div>';
									echo "</li>";
								echo '</ul>';
			                    
			                    echo '<div class="action_bar">';
			                    	echo Form::button('btnsave', '<span class="iconsweet">=</span>Guardar', array('class' => 'button_small bluishBtn fl_right'));
									echo "<br class='clear' />";
			                    echo '</div>';
			                echo Form::close();
							?>
			            </div>
			        </div>
			    </div>
			<?php 
			}
			?>
		    
		    <!--One_Wrap-->
		 	<div class="one_wrap">
		    	<div class="widget">
		        	<div class="widget_title"><span class="iconsweet">f</span><h5>Partes</h5></div>
		            <div class="widget_body">
		            	<!--Activity Table-->
		            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
		                    <tr>
		                        <th width="8%">ID</th>
		                        <th width="77%">NOMBRE</th>
		                        <th width="5%">ACTIVO</th>
		                    </tr>
		                    <?php
		                    if(isset($_socios)){
		                    	foreach($_socios as $socio){
		                    		echo "<tr>";
		                    			echo "<td>".$socio->Id."</td>";
										echo "<td>".$socio->Name."</td>";
										echo "<td>";
											echo "<input type='checkbox' style='opacity: 0;' name='active' id='".$socio->Id."'";
											if($socio->Active == Helpers_Const::ITEMACTIVE)
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
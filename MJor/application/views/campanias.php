<?php include Kohana::find_file('views', '_header'); ?>

<?php include Kohana::find_file('views', '_headerbar'); ?>

<script src=<?php echo URL::base()."/scripts/custom/campanias.js" ?> type="text/javascript"></script>

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
		        	<div class="widget_title"><span class="iconsweet">r</span><h5>Nueva Campana</h5></div>
		            <div class="widget_body">
						<!--Form fields-->		                
		                <?php echo Form::open('campanias/new', array('method' => 'POST'));
		                	echo '<ul class="form_fields_container">';
								echo "<li>";
		                    		echo Form::label('name', 'Nombre');
									echo '<div class="form_input">';
									echo Form::input('name', '', array('type' => 'text', 'id' => 'name'));
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
		    
		    <!--One_Wrap-->
		 	<div class="one_wrap">
		    	<div class="widget">
		        	<div class="widget_title"><span class="iconsweet">f</span><h5>Campanas</h5></div>
		            <div class="widget_body">
		            	<!--Activity Table-->
		            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
		                    <tr>
		                        <th width="8%">ID</th>
		                        <th width="77%">NOMBRE</th>
		                        <th width="5%">ACTIVO</th>
		                    </tr>
		                    <?php
		                    if(isset($_campanias)){
		                    	foreach($_campanias as $campania){
		                    		echo "<tr>";
		                    			echo "<td>".$campania->Id."</td>";
										echo "<td>".$campania->Name."</td>";
										echo "<td>";
											echo "<input type='checkbox' style='opacity: 0;' name='active' id='".$campania->Id."'";
											if($campania->Active == Helpers_Const::ITEMACTIVE)
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
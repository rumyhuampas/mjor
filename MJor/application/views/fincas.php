<?php include Kohana::find_file('views', '_header'); ?>

<?php include Kohana::find_file('views', '_headerbar'); ?>

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
		        	<div class="widget_title"><span class="iconsweet">r</span><h5>Nueva Finca</h5></div>
		            <div class="widget_body">
						<!--Form fields
		                <ul class="form_fields_container">
		                	<li><label>Nombre</label> <div class="form_input"><input name="" type="text"></div></li>
		                </ul>
		                <div class="action_bar">
		                    <a href="#" class="button_small bluishBtn fl_right"><span class="iconsweet">=</span>Guardar</a>
		                    <br class="clear" />
		                </div>-->
		                
		                <?php echo Form::open('fincas/new', array('method' => 'POST'));
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
		        	<div class="widget_title"><span class="iconsweet">f</span><h5>Fincas</h5></div>
		            <div class="widget_body">
		            	<!--Activity Table-->
		            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
		                    <tr>
		                        <th width="8%">ID</th>
		                        <th width="92%">NOMBRE</th>
		                    </tr>
		                    <?php
		                    if(isset($_fincas)){
		                    	foreach($_fincas as $finca){
		                    		echo "<tr>";
		                    			echo "<td>".$finca->Id."</td>";
										echo "<td>".$finca->Name."</td>";
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
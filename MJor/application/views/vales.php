<?php include Kohana::find_file('views', '_header'); ?>

<?php include Kohana::find_file('views', '_headerbar'); ?>

<script src=<?php echo URL::base()."/scripts/custom/vales.js" ?> type="text/javascript"></script>

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
		        	<div class="widget_title"><span class="iconsweet">r</span><h5>Nuevo Vale</h5></div>
		            <div class="widget_body">
						<!--Form fields-->		                
		                <?php echo Form::open('reportes/newvale', array('method' => 'POST'));
		                	echo '<ul class="form_fields_container">';
								echo "<li>";
		                    		echo Form::label('date', 'Fecha');
									echo '<div class="form_input">';
									echo Form::input('date', date("d/m/Y"), array('type' => 'text', 'style' => 'width:20%;', 'id' => 'datepicker'));
		                        	echo '</div>';
								echo "</li>";
								echo "<li>";
		                    		echo Form::label('text', 'Vale por');
									echo '<div class="form_input">';
									echo '<textarea rows="6" cols="" name="text"></textarea>';
		                        	echo '</div>';
								echo "</li>";
		                    echo '</ul>';
							
							echo '<div class="action_bar">';
								echo '<a class="button_small bluishBtn fl_right" id="btnsave"><span class="iconsweet">=</span>Guardar</a>';
		                    	//echo Form::button('btnsave', '<span class="iconsweet">=</span>Guardar', array('class' => 'button_small bluishBtn fl_right', 'id' => 'btnsave'));
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
		        	<div class="widget_title"><span class="iconsweet">f</span><h5>Vales</h5></div>
		            <div class="widget_body">
		            	<!--Activity Table-->
		            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
		                    <tr>
		                        <th width="8%">ID</th>
		                        <th width="20%">FECHA</th>
		                        <th width="57%">TEXTO</th>
		                        <th width="5%">ACCIONES</th>
		                    </tr>
		                    <?php
		                    if(isset($_vales)){
		                    	foreach($_vales as $vale){
		                    		echo "<tr>";
		                    			echo "<td>".$vale->Id."</td>";
										echo "<td>".$vale->date."</td>";
										echo "<td>".$vale->text."</td>";
										echo "<td>";
											echo '<span class="data_actions iconsweet">';
											echo Form::open('reportes/printvale', array('method' => 'POST', 'target' => '_blank', 'id' => 'formprintvale'));
												echo Form::hidden('valeid', $vale->Id);
												echo '<a href="#" original-title="Reimprimir" class="tip_north" name="reprint">V</a>';
											echo Form::close();
											echo '</span>';
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
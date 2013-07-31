<?php include Kohana::find_file('views', 'reports/_header'); ?>
                  	
<!--Dreamworks Container-->
<div id="dreamworks_container">
    
	<!--Main Content-->
	<section id="main_content">

		<!--Content Wrap-->
		<div id="content_wrap" style="margin-left:0px;">	
	        <div class="one_wrap">
	        	<div class="widget">
		        	<!--<div class="widget_title">
		        	</div>-->
		            <div class="widget_body">
		            	<div class="content_pad"> 
		            		<div class="widgets_wrap">
	                        	<div class="one_two_wrap" style=" padding: 10px; border: 1px solid black">
	                        		<table class="valetitle">
	                        			<tr style="">
	                        				<td class="hXXL blue" width="15%">vale</td>
	                        				<td class="hXL blue" width="70%" style="padding:10px; vertical-align:bottom;">por</td>
	                        				<td class="hXL white" width="10%" style="vertical-align:middle;">N</td>
	                        				<td class="hXL white" width="10%" style="vertical-align:middle;"><?php echo $_id; ?></td>
	                        			</tr>
	                        		</table>
	                        		<div style="margin-top: 10px;">
	                        			Fecha
		                        		<table class="valefecha">
		                        			<tr>
		                        				<td class="hM" width="33%"><?php echo date("d", strtotime($_date)); ?></td>
		                        				<td class="hM" width="33%"><?php echo date("m", strtotime($_date)); ?></td>
		                        				<td class="hM" width="33%"><?php echo date("y", strtotime($_date)); ?></td>
		                        			</tr>
		                        		</table>
	                        		</div>
	                        		<p class="hM valetext" height="150px;"><?php echo 'Vale por: '.$_text; ?></p>
	                        		
	                        		<div width="100%">
	                        			<div width="220px" style="float: left;">
			                        		<table width="100%" style="border: 1px solid black;">
			                        			<tr>
			                        				<td width="100%" height="50px" style="text-align: center;"></td>
			                        			</tr>
			                        			<tr>
			                        				<td class="hS" width="100%" style="text-align: center;">Autorizo</td>
			                        			</tr>
			                        		</table>
		                        		</div>
		                        		<div width="220px" style="float: right;">
			                        		<table width="100%" style="border: 1px solid black;">
			                        			<tr>
			                        				<td width="100%" height="50px" style="text-align: center;"></td>
			                        			</tr>
			                        			<tr>
			                        				<td class="hS" width="100%" style="text-align: center;">Firma</td>
			                        			</tr>
			                        		</table>
		                        		</div>
	                        		</div>
	                            </div>
	                    	</div>                            
                        </div>
		            </div>
		        </div>
	        </div>
		              
		</div><!--Content Wrap-->
	
	</section><!--Main Content-->
	
</div><!--Dreamworks Container-->

<?php include Kohana::find_file('views', '_footer'); ?>
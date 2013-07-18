<!DOCTYPE html>
<html>

<!-- Mirrored from breeze.pcollab.com/dw1.2/HTML_default/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 23 Jun 2012 06:50:01 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Dreamworks - Responsive admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!--Stylesheets-->
<link href=<?php echo URL::base()."/assets/css/reset.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/assets/css/main.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/assets/css/typography.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/assets/css/tipsy.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/scripts/cl_editor/jquery.cleditor.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/scripts/uploadify/uploadify.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/assets/css/jquery.ui.all.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/assets/css/fullcalendar.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/assets/css/bootstrap.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/scripts/jq_tables/demo_table_jui.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/scripts/fancybox/jquery.fancybox-1.3.4.css" ?> rel="stylesheet" type="text/css" />
<link href=<?php echo URL::base()."/assets/css/highlight.css" ?> rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<!--Javascript-->
<script src=<?php echo URL::base()."/scripts/jquery.min.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/excanvas.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.flot.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.flot.stack.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.flot.pie.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.quicksand.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.easing.1.3.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.tipsy.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/cl_editor/jquery.cleditor.min.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/uploadify/swfobject.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/uploadify/jquery.uploadify.v2.1.4.min.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.autogrowtextarea.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/form_elements.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.ui.core.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.ui.widget.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.ui.mouse.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.ui.slider.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.ui.progressbar.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.ui.datepicker.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jquery.ui.tabs.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/fullcalendar.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/gcal.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/bootstrap-modal.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/fancybox/jquery.fancybox-1.3.4.pack.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/fancybox/jquery.mousewheel-3.0.4.pack.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/highlight.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/jq_tables/jquery.dataTables.js" ?> type="text/javascript"></script>
<script src=<?php echo URL::base()."/scripts/main.js" ?> type="text/javascript"></script>
</head>
<body>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href="#"><img src=<?php echo URL::base()."assets/images/logo.png" ?> alt="" /></a></div>
    <!--Search-->
    <div class="header_search">
        <form action="#">
            <input type="text" name="search" placeholder="Search" id="ac">
            <input type="submit" value="">
        </form>
    </div>
</header>
<!--Dreamworks Container-->
<div id="dreamworks_container">
    <!--Primary Navigation-->
    <nav id="primary_nav">
        <ul>
            <li class="nav_dashboard active"><a href="index.html">Dashboard</a></li>
            <li class="nav_graphs"><a href="charts.html">Graphs</a></li>
            <li class="nav_forms"><a href="forms.html">Forms</a></li>
            <li class="nav_typography"><a href="typography.html">Typography</a></li>
            <li class="nav_uielements"><a href="ui_elements.html">UI Elements</a></li>
            <li class="nav_pages"><a href="pages.html">Pages</a></li>
        </ul>
    </nav>
<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->
<nav id="secondary_nav"> 
<!--UserInfo-->
<dl class="user_info">
	<dt><a href="#"><img src=<?php echo URL::base()."assets/images/avatar.png" ?> alt="" /></a></dt>
    <dd>
    <a class="welcome_user" href="#">Welcome,<strong>John Doe</strong></a>
    <span class="log_data">Last sign in : 16:11 Feb 27th 2012</span>
    <a class="logout" href="login.html">Logout</a>
    <a class="user_messages" href="#"><span>12</span></a>
    </dd>
</dl>
<h2>Dashboard</h2>
<ul>
	<li><a href="#"><span class="iconsweet">a</span>User Profiles</a></li>
    <li><a href="#"><span class="iconsweet">k</span>Admin Tools</a></li>
    <li><a href="#"><span class="iconsweet">o</span>Milestornes</a></li>
    <li><a href="#"><span class="iconsweet">S</span>Worklog</a></li>
</ul>
</nav>
<!--Content Wrap-->
<div id="content_wrap">	<!--Activity Stats-->
    	<div id="activity_stats">
        	<h3>Activity</h3>
            <div class="activity_column">
            	<span class="iconsweet">+</span> <span class="big_txt rd_txt">12</span>Added
            </div>
            <div class="activity_column">
            	<span class="iconsweet">Y</span> <span class="big_txt gr_txt">6</span>Flagged
            </div>
            <div class="activity_column">
            	<span class="iconsweet">#</span> <span class="big_txt">2</span>Answer pending
            </div>                         
        </div>                  
        <!--Quick Actions-->
        <div id="quick_actions">
        	<a class="button_big" href="#"><span class="iconsweet">+</span>Add new Project</a>
            <a class="button_big" href="#"><span class="iconsweet">w</span>Export Report</a>
            <a class="button_big btn_grey" href="#"><span class="iconsweet">f</span>Manage Projects</a>
        </div>
	<!--Notification Message-->
    	<div class="msgbar msg_Info hide_onC">
            <span class="iconsweet">*</span><p>Thanks for choosing Dreamworks!</p>
        </div>
	<!--One_TWO-->
 	<div class="one_two_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Projects graph</h5></div>
            <div class="widget_body">
            	<div class="content_pad">
            	<!--Projects Graph--> 
                <div id="chart_linear" class="no_overflow"  style="width:100%;height:270px"></div>
                </div>
            </div>
        </div>
    </div>
	<!--One_TWO-->
 	<div class="one_two_wrap fl_right">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">t</span><h5>Statistics</h5></div>
            <div class="widget_body">
            	<!--Stastics-->
            	<ul class="dw_summary">
                            <li>
                                <span class="percentage_done">12%</span> New registrations  <div class="progress_wrap"><div title="12%" class="tip_north progress_bar" style="width:12%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">9%</span> Re-opened tasks  <div class="progress_wrap"><div title="9%" class="tip_north progress_bar" style="width:9%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">46%</span> Task completed  <div class="progress_wrap"><div title="46%" class="tip_north progress_bar" style="width:46%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">82%</span> New visitors  <div class="progress_wrap"><div title="82%" class="tip_north progress_bar" style="width:82%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">27%</span> Unique visitors  <div class="progress_wrap"><div title="27%" class="tip_north progress_bar" style="width:27%"></div></div>
                            </li> 
                            <li>
                                 <span class="percentage_done">0%</span> Affiliate registration  <div class="progress_wrap"><div title="0%" class="tip_north progress_bar" style="width:0%"></div></div>
                            </li>                                                       
                 </ul>
            </div>
        </div>
    </div>   
	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">H</span><h5>Projects</h5></div>
            <div class="widget_body">
            	<div class="project_sort">
                	<ul class="filter_project">
                    	<li class="segment  selected"><a class="all" href="#">All <span class="count">10</span></a></li>
                        <li class="segment"><a class="incomplete" href="#">Incomplete<span class="count">6</span></a></li>
                        <li class="segment"><a class="Resolved" href="#">Resolved<span class="count">4</span></a></li>
                     </ul>
                     <ul class="project_list">
                        <li data-id="id-1" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-2" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-3" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                BBC
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>  
                        <li data-id="id-4" data-type="incomplete">
                        	<span class="project_badge grey iconsweet">
                            8
                            </span>
                            <a href="#" class="project_title">
                            	j&D <br />
                                Appstorm
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Carla
                            </a>                        
                        </li>        
                        <li data-id="id-5" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-6" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-7" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                Raje
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>  
                        <li data-id="id-8" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                iCAN
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li> 
                        <li data-id="id-7" data-type="incomplete">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                BBC
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>  
                        <li data-id="id-8" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                MAZE
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>                                                                 
                                                                                        
                     </ul>
                </div>
            </div>
        </div>
    </div>     
	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">f</span><h5>Activity across your projects</h5></div>
            <div class="widget_body">
            	<!--Activity Table-->
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                        <th width="8%">ID</th>
                        <th width="15%">Category</th>
                        <th width="32%">Project(s)</th>
                        <th width="12%">Status</th>
                        <th width="20%">Remarks</th>
                        <th width="13%">Actions</th>
                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="green_highlight pj_cat">Android</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_up">72% <span class="arrow_up iconsweet">]</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>
                    </tr>
                    <tr>
                        <td>3568</td>
                        <td><span class="grey_highlight pj_cat">Flex</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">12% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="green_highlight pj_cat">Android</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">72% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="grey_highlight pj_cat">Flex</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_up">72% <span class="arrow_up iconsweet">]</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="blue_highlight pj_cat">JAVA</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">44% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    
                     </tr>                          
                    <tr>
                        <td>4923</td>
                        <td><span class="green_highlight pj_cat">Android</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">72% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    
                     </tr>                   
                </table>
				<div class="action_bar">
                    <a class="button_small whitishBtn" href="#"><span class="iconsweet">l</span>Export Table</a>
                </div>
            </div>
        </div>
    </div>          
</div>
</section>
</div>

</body>

<!-- Mirrored from breeze.pcollab.com/dw1.2/HTML_default/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 23 Jun 2012 06:50:33 GMT -->
</html>
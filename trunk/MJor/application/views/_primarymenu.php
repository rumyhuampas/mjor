<!--Primary Navigation-->
<nav id="primary_nav">
    <ul>
        <li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $_menuid ?> class="nav_dashboard">
        	<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
        		<?php echo Helpers_Const::MENUINICIOTITLE; ?>
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $_menuid ?> class="nav_graphs">
        	<a href="charts.html">
        		Graphs
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUABMID; ?> menuid=<?php echo $_menuid ?> class="nav_forms">
        	<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'fincas', 'action' => 'index')); ?>>
        		<?php echo Helpers_Const::MENUABMTITLE; ?>
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $_menuid ?> class="nav_typography">
        	<a href="typography.html">
        		Typography
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $_menuid ?> class="nav_uielements">
        	<a href="ui_elements.html">
        		UI Elements
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $_menuid ?> class="nav_pages">
        	<a href="pages.html">
        		Pages
        	</a>
        </li>
    </ul>
</nav>
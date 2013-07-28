<!--Primary Navigation-->
<nav id="primary_nav">
    <ul>
        <li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $_menuid ?> class="nav_dashboard">
        	<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
        		<?php echo Helpers_Const::MENUINICIOTITLE; ?>
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUOPERID; ?> menuid=<?php echo $_menuid ?> class="nav_graphs">
        	<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'partes', 'action' => 'index')); ?>>
        		<?php echo Helpers_Const::MENUOPERTITLE; ?>
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUABMID; ?> menuid=<?php echo $_menuid ?> class="nav_forms">
        	<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'fincas', 'action' => 'index')); ?>>
        		<?php echo Helpers_Const::MENUABMTITLE; ?>
        	</a>
        </li>
        <li id=<?php echo Helpers_Const::MENUREPOID; ?> menuid=<?php echo $_menuid ?> class="nav_pages">
        	<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'reportes', 'action' => 'index')); ?>>
        		<?php echo Helpers_Const::MENUREPOTITLE; ?>
        	</a>
        </li>
    </ul>
</nav>
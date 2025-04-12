<div id="menu-lateral" class="sidebar">
	<?php if ( is_active_sidebar( 'menu-lateral' ) ) : ?>
		<?php dynamic_sidebar( 'menu-lateral' ); ?>
	<?php else : ?>
        <p> Sidebar sin widgets activos</p>
		<!-- Time to add some widgets! -->
	<?php endif; ?>
</div>
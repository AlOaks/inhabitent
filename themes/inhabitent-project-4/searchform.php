<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<button class="search-submit">
			<span id="icon" class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
		</button>
		<label></label>
		<input type="search" class="search-field" placeholder="Type hit and enter ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		
		
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		
	</fieldset>
</form>

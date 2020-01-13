<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset>
		<a class="search-toggle"><i class="fas fa-search"></i>
		</a>
		<label class="search-label">
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
	</fieldset>
</form>
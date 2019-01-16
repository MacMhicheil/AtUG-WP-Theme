<?php
    /**
     * The header template file
     *
     * @package AtUG.uk
     * @since AtUG.uk
     */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
<div style="text-align:right; background-color: #556b2f;"><a class="navbar-brand" href="http://atug.uk/wp-admin/"><i class="fa fa-sign-in"></i></a> <a style="color: white;" class="navbar-brand" href="http://atug.uk/feed"><i class="fa fa-rss-square"></i></a> <a style="color: white;" class="navbar-brand" href="https://twitter.com/AtUGUK"><i class="fa fa-twitter-square"></i></a> <a style="color: white;" class="navbar-brand" href="mailto:chris@macmhicheil.uk"><i class="fa fa-envelope-square"></i></a></div>
<div style="text-align: center; background-color: #556b2f; padding-bottom: 15px; color: white;">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-fluid" src="http://atug.uk/wp-content/themes/AtUG.uk/AtUG_Banner_Alpha.png" width="750px"></a><br/>
</div>	
<nav class="navbar navbar-expand-md navbar-light" role="navigation" style="background-color: #556b2f;">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>
<div class="container" style="padding-top: 10px">
    	<form role="search" method="get" class="search-form input-group-prepend" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        	<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Lorg sna postaichean &hellip;', 'placeholder', 'WPTheme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    	</form>
</div>
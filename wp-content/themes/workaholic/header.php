<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11"><!-- Designed and built by Nina Errey -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />


<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="http://fonts.googleapis.com/css?family=Coustard" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.expander.js"></script>


<script type="text/javascript">
jQuery(document).ready(function() { 
 jQuery('div.expander').expander( {
  slicePoint: 180 
});
});

</script>
<script type="text/javascript">
jQuery(document).ready(function() { 
    jQuery('ul.sf-menu').superfish({ 
        delay:       500,                            // one second delay on mouseout 
        animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
        speed:       'fast',                          // faster animation speed 
        autoArrows:  false,                           // disable generation of arrow mark-up 
        dropShadows: true                            // disable drop shadows 
    });
});

</script>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45802793-1', 'tuningintokids.org.au');
  ga('send', 'pageview');

</script>
<div id="header">
<div class="inner">
	<div id="logo">
		<?php if(is_home()) { ?> <h1><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
		<?php } else { ?><p><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></p>
		<?php  } ?>
		
	</div>
 	<?php if(function_exists('get_search_form')) : ?>
		<?php get_search_form(); ?>
		<?php else : ?>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
	
<div id="topnav">
    <!-- Navigation -->
    <?php 
	if (function_exists('wp_nav_menu') ) {
		wp_nav_menu( 'menu=top&sort_column=menu_order&menu_class=sf-menu&container=' );
	} ?>
</div>
<div id="submenu">
<div id="parents">
      <?php 
	if (function_exists('wp_nav_menu') ) {
		wp_nav_menu( 'menu=parents&sort_column=menu_order&menu_class=sf-menu&container=' );
	} ?>
</div>
<div id="professionals">
      <?php 
	if (function_exists('wp_nav_menu') ) {
		wp_nav_menu( 'menu=professionals&sort_column=menu_order&menu_class=sf-menu&container=' );
	} ?>
</div>

</div>
</div>	
</div>

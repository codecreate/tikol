<?php
/*
Template Name: Page
*/

$url =  $_SERVER[REQUEST_URI];
?>
<?php get_header(); 
if (strpos($url, "parents")) { ?>
<div id="divider2"></div>
<?php } else { ?>
<div id="divider"></div>
<?php } ?>
	<div id="content" class="grid_8">
<div id="content-inner">
<div id="wrapper">
<?php
if (strpos($url, "parents-calendar")) { 


wp_reset_query(); 

$my_id = 283;

$post_id_hp = get_post($my_id); 

?>
<h1><?php echo $post_id_hp->post_title; ?></h1>
<div class="cal-title">
<?php echo $post_id_hp->post_content; ?>
</div>
<?php 
}

if (strpos($url, "professionals-calendar")) { 


wp_reset_query(); 

$my_id = 287;

$post_id_hp = get_post($my_id); 

?>
<h1><?php echo $post_id_hp->post_title; ?></h1>
<div class="cal-title">
<?php echo $post_id_hp->post_content; ?>
</div>
<?php 
}

if (strpos($url, "add")) { 


wp_reset_query(); 

$my_id = 290;

$post_id_hp = get_post($my_id); 

?>
<h1><?php echo $post_id_hp->post_title; ?></h1>
<div class="cal-title">
<?php echo $post_id_hp->post_content; ?>
</div>
<?php 
}
if (!strpos($url, "event")) {
if(!is_page(40)) { 
if(!is_page(25)) { ?>
<div id="copy">
<?php } } } ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	
<?php if (!strpos($url, "events")) { ?>

<?php
if (!strpos($url, "event")) { 
if(!is_page(40)) {
if(!is_page(25)) {
?></div>
<?php } }
if (strpos($url, "parents")) {
if(!(is_page(40))) { 
 get_sidebar();
}
} else {
if(!(is_page(25))) {
 get_sidebar("page");
}
} 
}
?>

	<?php }  ?>



<?php get_footer(); ?>
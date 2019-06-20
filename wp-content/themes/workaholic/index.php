<?php get_header(); ?>
<div id="slider">
	<div class="inner"><?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '128' ); ?></div>
</div>
<div id="content">
<div id="content-inner">
<div id="wrapper">
<div id="copy">

<?php  

wp_reset_query(); 

$my_id = 12;

$post_id_hp = get_post($my_id); 



echo $post_id_hp->post_content;

 ?>
</div>

<?php get_sidebar("page"); ?>
<?php get_footer(); ?>

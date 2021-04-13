<?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?>
<?php if ( is_front_page() ) { get_includes('middle'); }?>

<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<?php if(!is_front_page()) { ?>
				<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			<?php }?>
			<figure class="main_img">
				<img src="<?php bloginfo('template_url'); ?>/images/main-img.jpg" alt="cargo ship and a plane">
			</figure>
			<main>
			<?php get_template_part( 'loop', 'home' );?>		
			</main>
		</div>
	<div class="clearfix"></div>
	</div>
</div>

<?php if ( is_front_page() ) { get_includes('bottom'); } ?>
<?php get_includes('footer');?>

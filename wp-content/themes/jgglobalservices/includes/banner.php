<div id="banner">
	<div class="wrapper">
	<?php if (is_front_page() ) { ?>
		<div class="bnr_con">
			<div class="slider">
				<!-- <div class="box_skitter box_skitter_large">  -->
					<ul class="rslides">
						<li><figure><img src="<?php bloginfo('template_url'); ?>/images/slider/banner_img1.jpg" alt="cargo ship"/></figure></li>
						<li><figure><img src="<?php bloginfo('template_url'); ?>/images/slider/banner_img2.jpg" alt="cargo ship"/></figure></li>
						<li><figure><img src="<?php bloginfo('template_url'); ?>/images/slider/banner_img3.jpg" alt="container cargo ship sailing"/></figure></li>
						<li><figure><img src="<?php bloginfo('template_url'); ?>/images/slider/banner_img4.jpg" alt="container truck"/></figure></li>
					</ul>
				<!-- </div> -->
			</div>
			<div class="mobi_ban">
				<figure><img src="<?php bloginfo('template_url'); ?>/images/slider/banner_img1.jpg" alt="cargo ship at port"></figure>
			</div>
			<div class="bnr_info">
				<?php dynamic_sidebar('bnr_info');?>
				<div class="bnr_flex">
					<figure><img src="<?php bloginfo('template_url'); ?>/images/slogan-img1.jpg" alt="cargo truck moving"></figure>
					<figure><img src="<?php bloginfo('template_url'); ?>/images/slogan-img2.jpg" alt="cargo ship sailing"></figure>
				</div>
				
			</div>
			<?php } else { ?>
			<div class="non_ban">
				<div class="non_ban_img">
					<?php if(is_home() && is_author() && is_category() && is_tag() && is_single()) { ?>
					<?php if (has_post_thumbnail() ) {?>
							<?php the_post_thumbnail('full');?>
					<?php }else{ ?>
							<figure><img src="<?php bloginfo('template_url');?>/images/slider/banner_img1.jpg" alt="cargo ship"/></figure>
					<?php } ?>
					<?php } elseif (has_post_thumbnail() && !is_home() && !is_author() && !is_category() && !is_tag() && !is_single()) { ?>
								<?php the_post_thumbnail('full');?>
					<?php } else { ?>
						<img src="<?php bloginfo('template_url'); ?>/images/slider/banner_img1.jpg" alt="cargo ship"/>
					<?php } ?>
				</div>

				<div class="page_title">
					<?php if(!is_home() && !is_author() && !is_category() && !is_tag() && !is_single()) { ?>
						<h1 class="h1_title"><?php the_title(); ?></h1>
						<?php echo do_shortcode("[short_title id='" . get_the_ID() . "']"); ?>
					<?php } else { ?>
						<h1 class="h1_title">Blog</h1>
					<?php } ?>
				</div>
			</div>
		<?php }?>
		</div>
	</div>
</div>
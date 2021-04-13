<footer>
<!-- <div class="footer_top">
	<div class="wrapper">
		<div class="footer_top_con">
			<div class="contact_info">
				<h2>Contact Information</h2>
				<ul>
					<li><address>123 Street Name, Lorem Ipsum
							Orlando, Florida 1234</address>
							<a href="">View Map and Directions &raquo;</a></li>
					<li>Phone: <mark>602-358-7106</mark></li>
					<li>Email: <a href="mailto:noncep@agchurchconsulting.com ">noncep@agchurchconsulting.com</a></li>
				</ul>
			</div>

			<div class="footer_logo">
				<a href="<?php //echo get_home_url(); ?>"><figure><img src="images/footer-logo.png" alt="<?php //echo get_bloginfo('name');?>"></figure></a>
			</div>
		</div>
	</div>
</div> -->
<div class="footer_btm">
  <div class="wrapper">
			<div class="footer_btm_con">
				<div class="footer_nav">
					<h2><?php echo get_bloginfo('name');?></h2>
					<?php wp_nav_menu( array('theme_location' => 'secondary' ) ); ?>
				</div>
				<div class="legal_con">
				<?php dynamic_sidebar('legal_con');?>
				</div>
				<div class="connect_con">
				<?php dynamic_sidebar('contact_info');?>
					<div class="s_media">
						<figure>
							<a href="http://facebook.com"><img src="<?php bloginfo('template_url'); ?>/images/facebook-icon.png" alt="facebook icon"></a>
						</figure>
						<figure>
							<a href="http://twitter.com"><img src="<?php bloginfo('template_url'); ?>/images/twitter-icon.png" alt="twitter-icon"></a>
						</figure>
					</div>
				</div>
				<div class="ada_img">
					<img src="<?php bloginfo('template_url'); ?>/images/footer-img1.jpg" alt="ada logo">
				</div>
				<div class="copyright">
					<figure>
					<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="<?php echo get_bloginfo('name');?>"></a>
					</figure>
					<div>
				  &copy; Copyright
						<?php
						$start_year = '2020';
						$current_year = date('Y');
						$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
						echo $copyright;
						?>
				  <span class="footer_comp"><?php echo get_bloginfo('name');?></span>
				  <a href="" target="_blank" rel="nofollow">Web Design</a>:<a href="http://proweaver.com" target="_blank" rel="nofollow">Proweaver</a>
				</div>
				</div>
			</div>
		</div>
</div>
</footer>
	<span class="back_top"></span>
  </div> <!-- End Clearfix -->
  </div> <!-- End Protect Me -->
  <?php get_includes('ie');?>
  <!--
  Solved HTML5 & CSS IE Issues
  -->
  <script src="<?php bloginfo('template_url'); ?>/js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
  <!--
  Solved Psuedo Elements IE Issues
  -->
  <script src="<?php bloginfo('template_url'); ?>/js/calcheight.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.skitter.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/responsiveslides.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/plugins.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/css3-animate-it.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
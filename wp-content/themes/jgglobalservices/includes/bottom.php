<div id="bottom1">
	<div class="wrapper">
		<div class="btm1_con">
				<div class="btm1_box_con">
				<?php dynamic_sidebar('bottom1_con');?>
				</div>
				<div class="btm1_boxes animatedParent">
					<section class="btm1_box1 animated fadeInRight">
						<img src="<?php bloginfo('template_url'); ?>/images/btm-img1.jpg" alt="Container ship in export and import business and logistics.">
						<?php dynamic_sidebar('bottom1_box1');?>
					</section>
	
					<section class="btm1_box2 animated fadeInLeft">
						<img src="<?php bloginfo('template_url'); ?>/images/btm-img2.jpg" alt="a group of employees.">
						<?php dynamic_sidebar('bottom1_box2');?>
					</section>
					<section class="btm1_box3 animated fadeInRight">
						<img src="<?php bloginfo('template_url'); ?>/images/btm-img3.jpg" alt="two senior meeting in a lady.">
						<?php dynamic_sidebar('bottom1_box3');?>
					</section>
					<section class="btm1_box4 animated fadeInLeft">
						<img src="<?php bloginfo('template_url'); ?>/images/btm-img4.jpg" alt="pile of cargo container.">
						<?php dynamic_sidebar('bottom1_box4');?>
					</section>
				</div>
		</div>
	</div>
</div>
<div id="bottom2">
	<div class="wrapper">
		<div class="btm2_con">
			<section class="btm2_cont">
				<div class="btm2_left_con">
				<?php dynamic_sidebar('bottom2_con');?>
				</div>
				<div class="btm2_right_con">
					<figure>
						<img src="<?php bloginfo('template_url'); ?>/images/btm2-img1.jpg" alt="cargo ship sailing">
					</figure>
				</div>
			</section>
			<div class="btm2_btm_con">
			<?php dynamic_sidebar('bottom3');?>
			</div>
			<div class="btm2_btm_form">

			<?php
				$prompt_message = '<span class="newsletter" style="color: #FFF;font-size:13px;">Please fill the following:</span>';
				if(isset($_POST['submit_info'])){
				@session_start();
				if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email_Address']))))
				{ $prompt_message = '<div id="error" style="color: #FFF;font-size:13px;">Please enter a valid email address</div>';}
				else {
				$_SESSION['Full_Name'] = (isset($_POST['Full_Name'])) ? $_POST['Full_Name'] : '';

				$_SESSION['Email_Address'] = (isset($_POST['Email_Address'])) ? $_POST['Email_Address'] : '';

				$_SESSION['Question_or_Comment'] = (isset($_POST['Question_or_Comment'])) ? $_POST['Question_or_Comment'] : '';

				echo "<script type='text/javascript'>window.location='".get_home_url()."?p=12#myframe';</script>";
				}}
				?>
			<form action="#" method="post">
				<input type="text" name="Full_Name" placeholder="Full Name" required="" class="form-text">
				<input type="email" name="Email_Address" placeholder="Email Address" required="" class="form-email">
				<input class="form-message" type="text" placeholder="Message" name="Question_or_Comment">
				<input  type="submit" name="submit_info" value="Submit" class="form-btn">
			</form>
				<!-- <form action="#"  method="post">
					<input class="form-text" type="text" placeholder="Full Name" name="Full_Name">
					<input class="form-email" type="text" placeholder="Email Address" name="Email_Address" required="">
					<input class="form-message" type="text" placeholder="Message" name="Question_or_Comment">
					<textarea name="Question_or_Comment" placeholder="Message"  class="form-message"></textarea>
					<button class="form-btn" type="submit"  name="submit_info" value="Submit">Submit</button>
				</form> -->
			</div>
		</div>
	
	</div>
</div>
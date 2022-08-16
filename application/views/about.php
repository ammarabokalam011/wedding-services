<?php $this->load->view('include/header')?>
<?php $this->load->view('include/navbar')?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div class="about">
		<div class="container">
		<h2 class="heading-agileinfo">About Us<span>
                wedding is organized for all the services you want in the best way
            </span></h2>
			<div class="about-grids-1">
				<div class="col-md-5 wthree-about-left">
					<div class="wthree-about-left-info">
						<img src="<?php echo base_url('resources/')?>images/9.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-7 agileits-about-right">
					<h3>The program was built by :</h3><br>
                       <h5> GHUFRAN DUAIBES</h5>
                       <h5> RAWAN ALTAKHEN</h5>
                       <h5>  AMMAR ABOKALAM</h5><br>
					<h4>The program is to organize wedding parties and provide the necessary services to the user with ease</h4><br>
                    <span>The services are the halls where the user can browse the halls in the program and all the details related to it and enable the distribution of invitees as he wants and booking if he wants
                    There is a saloon service where the bride can browse the halls in the program and all the details related to it to show the best form
                    There is also a restaurant service where the user can choose the food and sweets that he wants if you do not like the sweets and food provided by the lounge and find inside all the details
                        And Hinnam the possibility of adding a box or salon or restaurant on the program also</span>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- offers -->

	<!-- offers -->
		<!-- about-team -->
	<div class="team">
		<div class="container">
			<h3 class="heading-agileinfo">Our Team<span>the powerful team</span></h3>
			<div class="team-row-agileinfo">
				<div class="col-md-4">
					<div class="thumbnail team-agileits">
						<img src="<?php echo base_url('resources//')?>images/75.jpg" class="img-responsive" alt=""/><br><br>
							<h4>RAWAN ALTAKHEN</h4>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>
							</div>

					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail team-agileits">
						<img src="<?php echo base_url('resources/')?>images/t1.jpg" class="img-responsive" alt=""/><br><br>

							<h4>JAMMAR ABOKALAM</h4>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>
							</div>

					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail team-agileits">
						<img src="<?php echo base_url('resources/')?>images/76.jpg" class="img-responsive" alt=""/><br><br>

							<h4>GHUFRAN DUAIBES</h4>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>
							</div>

					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->
<!-- about -->
<!-- footer-top -->

<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="<?php echo base_url('resources/')?>js/jquery-2.2.3.min.js"></script>
	
<!-- skills -->
<script type="text/javascript" src="<?php echo base_url('resources/')?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/')?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script src="<?php echo base_url('resources/')?>js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
    <div class="copy-right">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
                <div class="copy-left">
                    <p>Design by: GHUFRAN DUAIBES RAWAN ALTAKHEN AMMAR ABOKALAM</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 top-middle">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</body>

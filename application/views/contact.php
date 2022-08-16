<?php $this->load->view('include/header')?>
<?php $this->load->view('include/navbar')?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div class="w3ls_address_mail_footer_grids">
	<div class="container">
	<h2 class="heading-agileinfo">Contact<span>wedding is organized for all the services you want in the best way.</span></h2>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
		</div>
		<div class="col-md-6 contact-form">
				<h4 class="white-w3ls">Contact Form</h4>
				<form action="#" method="post">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="Name" required="">
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="Email" required="">
						<label>Email</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="text" name="Subject" required="">
						<label>Subject</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="Message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="SEND">
				</form>
			</div>
			<div class="col-md-6 contactright">
				<h3>Contact Address</h3>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>3481 Melrose Place, Beverly Hills, <span>New York City 90210.</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">info@example1.com</a> 
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
			</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!-- //contact -->	
<!-- footer-top -->
<div class="footer-top">
    <div class="container">
        <div class="col-md-3 foot-left">
            <h3>About Us</h3>
            <p>GHUFRAN DUAIBES</p>
            <p>RAWAN ALTAKHEN</p>
            <p>AMMAR ABOKALAM</p>
        </div>
        <div class="col-md-3 foot-left">
            <h3>Get In Touch</h3>

            <div class="contact-btm">
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <p>90 Street, City, State 34789.</p>
            </div>
            <div class="contact-btm">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <p>+456 123 7890</p>
                <div class="contact-btm">
                </div>
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                <p><a href="mailto:example@email.com">info@example.com</a></p>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="col-md-3 foot-left">
            <h3>Latest Events</h3>
            <ul>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url('resources/')?>images/g1.jpg" alt="" class="img-responsive"></a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url('resources/')?>images/g2.jpg" alt="" class="img-responsive"></a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url('resources/')?>images/g3.jpg" alt="" class="img-responsive"></a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url('resources/')?>images/g4.jpg" alt="" class="img-responsive"></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 foot-left">
            <h3>Subscribe</h3>
            <form action="#" method="post">
                <input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- /footer-top -->							


			
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Events
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="<?php echo base_url('resources/')?>images/g8.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
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
</html>
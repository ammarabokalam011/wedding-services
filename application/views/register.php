<!DOCTYPE html>
<html>
<style>
    .hi{background-image: url("http://localhost/WeddingService/resources/images/ttt.jpg");
        background-color: #cccccc; height:500px; background-position: center; background-repeat: no-repeat;background-size: cover;
    }
</style>
<?php $this->load->view('include/header')?>
<?php $this->load->view('include/navbar')?>

<body class="hi">

<br>
<div class="w3ls_address_mail_footer_grids">
    <br>    <br>
    <div class="container" >
        <div class=" col-lg-6 col-md-6 contact-form" style=" margin-left: 25%; height: 720px">
            <div style="margin-left: 45%">
                <img style="  width: 4em;  " src="<?php echo base_url('/resources/images/ew-logoicon.svg')?>"/>
            </div>
            <h4 class="white-w3ls" style="text-align: center; ">Register</h4>
            <form method="post" action="<?php echo base_url(); ?>register/validation">
                <div class="form-group">
                    <label>user_name</label>
                    <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
                    <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                </div>
                <div class="form-group">
                    <label>user_phone</label>
                    <input type="text" name="user_phone" class="form-control" value="<?php echo set_value('user_phone'); ?>" />
                    <span class="text-danger"><?php echo form_error('user_phone'); ?></span>
                </div>
                <div class="form-group">
                    <label>user_mobile</label>
                    <input type="text" name="user_mobile" class="form-control" value="<?php echo set_value('user_mobile'); ?>" />
                    <span class="text-danger"><?php echo form_error('user_mobile'); ?></span>
                </div>
                <div class="form-group">
                    <label>user_email</label>
                    <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                    <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                </div>
                <div class="form-group">
                    <label>userPaymentAccount</label>
                    <input type="text" name="userPaymentAccount" class="form-control" value="<?php echo set_value('userPaymentAccount'); ?>" />
                    <span class="text-danger"><?php echo form_error('userPaymentAccount'); ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" value="Register" class="btn btn-info" />  <a style="font-size: 20px; margin-left: 40%; " href="<?php echo base_url(); ?>login">Login</a>
                </div>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //contact -->

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
</script><div class="copy-right">
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
<!-- //here ends scrolling icon -->
</body>
</html>
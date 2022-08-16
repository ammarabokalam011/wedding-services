<!DOCTYPE html>
<html>
<style>
    .hi{background-image: url("http://localhost/WeddingService/resources/images/ttt.jpg");
    background-color: #cccccc; height: 500px; background-position: center; background-repeat: no-repeat;background-size: cover;
    }
</style>
<?php $this->load->view('include/header')?>
<?php $this->load->view('include/navbar')?>

    <body class="hi">
<div class="container">
            <?php
            if($this->session->flashdata('message'))
            {
                echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
            }
            ?><br><br>
    <div class="w3ls_address_mail_footer_grids">
        <div class="container"><br><br>
            <div class=" col-lg-6 col-md-6 contact-form " style="height:450px ; margin-left: 20%; ">
                <div style="margin-left: 45%">
                    <img style="  width: 5em;  " src="<?php echo base_url('/resources/images/ew-logoicon.svg')?>"/>
                </div>
                <h4 class="white-w3ls" style="text-align: center;">Login</h4>
            <form method="post" action="<?php echo base_url(); ?>login/validation">
                <div class="form-group">
                    <label>Enter USER Email</label>
                    <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                    <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;<a style="font-size: 20px; margin-left: 40%; " href="<?php echo base_url(); ?>register">Register</a>
                </div>
            </form>
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
<!-- //here ends scrolling icon -->
</body>
</html>
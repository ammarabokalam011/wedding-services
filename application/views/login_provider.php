
<?php $this->load->view('include/header')?>
<body>

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
            ?>
    <div class="w3ls_address_mail_footer_grids">
        <div class="container">
            <div class="col-md-6 contact-form">
                <h4 class="white-w3ls">Login</h4>
            <form method="post" action="<?php echo base_url(); ?>provider/login">
                <div class="radio-inline">
                    <label><input type="radio" value="salon" name="type" >Salon</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" value="hall" name="type">Hall</label>
                </div>
                <div class="radio-inline ">
                    <label><input type="radio" value="restaurant" name="type" >Restaurant</label>
                </div>
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
                    <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
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
        function valueChanged() {
            if (document.getElementById("is_BMW").checked == true) {
                document.getElementById("is_BMW").value = 1;
                document.getElementById("is_Mercedes").value = 0;
            } else {
                document.getElementById("is_BMW").value = 0;
                document.getElementById("is_Mercedes").value = 1;
            }
        }
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
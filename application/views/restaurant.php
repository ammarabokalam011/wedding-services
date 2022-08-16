<?php $this->load->view('include/header')?>
<?php $this->load->view('include/navbar')?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div class="team">
    <div class="container"><br><br>
        <h2 class="heading-agileinfo">
            Restaurant
            <span>
                Choose the restaurant you like
            </span>
        </h2>
        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4 ">
            <form class="form-inline mr-auto mb-4" action="<?php echo base_url('salons/search')?>" method="get">
                <input class="form-control "  style="height: 60px;" name="keyword" type="text" placeholder="Search" aria-label="Search">
                <button class="btn form-control" style=" background-color: fuchsia;color: #0055cc" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <?php
        foreach ($restaurants as $restaurant){
            $data['id']=$restaurant->res_id;
            $data['name']=$restaurant->res_name;
            $data['location']=$restaurant->res_location;
            $data['phone']=$restaurant->res_phone;
            $data['mobile']=$restaurant->res_mobile;
            $data['emile']=$restaurant->res_email;
            $data['image']=$restaurant->res_image;
            $this->load->view('items/restaurant_item',$data);
        }
        ?>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
        <nav>
            <ul class="center-block pagination">
                <li><a href="<?php base_url('restaurants/open')?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>

                <?php
                for($i=0;$i<=$restaurant_count/8;$i++){
                    echo '<li><a href="'.base_url('restaurants/page/').($i+1).'">'.($i+1).'</a></li>';
                }
                ?>
            </ul>
        </nav>
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
</body>
</html>
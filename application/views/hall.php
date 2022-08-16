<?php $this->load->view('include/header')?>
<?php $this->load->view('include/navbar')?>

<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" xmlns="http://www.w3.org/1999/html">

<div class="team">
    <div class="container"><br><br>
        <h2 class="heading-agileinfo">wedding venues
            <span>
             get information about the one you like and reserve it
            </span>
        </h2>
        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4 ">
            <form class="form-inline mr-auto mb-4" action="<?php echo base_url('salons/search')?>" method="get">
                <input class="form-control "  style="height: 60px;" name="keyword" type="text" placeholder="Search" aria-label="Search">
                <button class="btn form-control" style=" background-color: fuchsia;color: #0055cc" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>


        <?php
        foreach ($halls as $hall){
            $data['id']=$hall->hall_id;
            $data['name']=$hall->hall_name;
            $data['maxGuestNum']=$hall->maxGuestNum;
            $data['location']=$hall->hall_location;
            $data['image']=$hall->image;
            $this->load->view('items/hall_item',$data);
        }
        ?>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
        <nav>
            <ul class="center-block pagination">
                <li><a href="<?php base_url('halls/')?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>

                <?php
                for($i=0;$i<=$halls_count/8;$i++){
                    echo '<li><a href="'.base_url('halls/page/').($i+1).'">'.($i+1).'</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>
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

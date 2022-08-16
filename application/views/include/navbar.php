<div class="header-w3layouts">
    <script src="<?php echo base_url('resources/')?>js/bootstrap.js" type="javascript"></script>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

                    <span class="sr-only">Wedding</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  href="<?php echo base_url('welcome/')?>">
                    <div >
                            <img style="  width: 5em;" src="<?php echo base_url('/resources/images/ew-logoicon.svg')?>"/>

                        </div></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div  class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"><a class="page-scroll" href="<?php echo base_url('welcome/')?>#page-top"></a>	</li>
                    <li><a style="font-size: 20px; "class="hvr-sweep-to-right" href="<?php echo base_url('welcome/')?>">Home</a></li>
                    <li><a style="font-size: 20px; "class="hvr-sweep-to-right" href="<?php echo base_url('')?>Halls">Halls</a></li>
                    <li><a style="font-size: 20px; "class="hvr-sweep-to-right" href="<?php echo base_url('')?>Salons">Salon</a></li>
                    <li><a style="font-size: 20px; " class="hvr-sweep-to-right" href="<?php echo base_url('')?>Restaurants">Restaurant</a></li>
                    <li><a style="font-size: 20px; " class="hvr-sweep-to-right" href="<?php echo base_url('')?>Algorithm">Algorithm</a></li>
                    <li class="dropdown">
                        <a style="font-size: 20px; " href="#" class="dropdown-toggle hvr-sweep-to-right" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="hvr-sweep-to-right" href="<?php echo base_url('welcome/')?>about">About</a></li>
                            <li><a class="hvr-sweep-to-right" href="<?php echo base_url('welcome/')?>events">Events</a></li>
                            <li><a class="hvr-sweep-to-right" href="<?php echo base_url('welcome/')?>gallery">Gallery</a></li>

                        </ul>
                    </li>
                    <?php
                    if($this->session->has_userdata('user_email')){
                        echo '<li><a style="font-size: 20px; " class="hvr-sweep-to-right" href="'.base_url("/Login/").'Logout">Logout</a></li>';
                        echo  $this->session->userdata('user_email');

                    }else{
                        echo '<li><a style="font-size: 20px; " class="hvr-sweep-to-right" href="'.base_url("/").'Login">Login</a></li>
                         <li><a style="font-size: 20px; " class="hvr-sweep-to-right" href="'.base_url("/").'Register">Register</a></li>
                   ';
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
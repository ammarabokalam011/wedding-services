<?php
$this->load->view('include/navbar');
$this->load->view('include/header');
?>
<style>
    .ainer {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .ainer input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .ainer:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .ainer input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .ainer input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .ainer .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



<section  class="row" style="margin-left:10%; margin-top: 10%; margin-right:10% " >
    <div  class=" col-lg-6 col-md-6 " >
        <img class="im" style="width:500px; height: 550px;" src="<?php echo base_url('resources/images/salons/gibran%20khabbaz5.jpg')?>">
    </div>
    <?php

    foreach ( $restaurants as $item) {

        $id=$item->res_id;
        echo ' <div class="col-lg-6 col-md-6  content-item content-item-1 background" style="width:600px; height: 550px;"  >  
                           <h2  class="heading-agileinfo ">'.$item->res_name.
            '<span><h3><span class="light-blue-text">Location:</span>' .$item->res_location.
            '<span class="light-blue-text">Mobile:</span>' .$item->res_mobile.
            '<span class="light-blue-text">Phone:</span>' .$item->res_phone.

            '<span class="light-blue-text">Email:</span>'.$item->res_email.'</h3>';
        $id=$item->res_id;
        echo'</div>';
    }?>
</section>



<?php


echo ' <div class="row clearfix" style="margin-left: 10%; margin-right: 10%; margin-top: 90px;">
                <ul class="gallery-post-grid holder">';
echo ' <form action="'.base_url('Restaurants/reserve').'" method="post">';
foreach ($meals as $item)
    echo "
                
                   <li  class='span4 gallery-item' data-id='id-1' data-type='illustration'>
                        <span class='gallery-hover-3col hidden-phone hidden-tablet''>
                            <span class='gallery-icons'>
                                <a href='$item->meals_photo' class='item-zoom-link lightbox' title='Custom Illustration' data-rel='prettyPhoto'></a>
                                <a href='gallery-single.htm' class='item-details-link'></a>
                            </span>
                        </span>
                        <a href='$item->meals_photo'><img width='300' height='250' src='$item->meals_photo' alt='Gallery'></a>
                        <span class='project-details'><a href='$item->meals_photo'></a> ' $item->meal_name' <p>'$item->meal_price'</p>
                     <input class='service' id='cost$item->meal_id' onchange='calc()' value='0' type='number' name='service$item->meal_id'>
    </label>
                    </li> 
        
      ";
echo '</ul></div>';

?>

<div class="row" >
    <div class="col-lg-12 col-md-6 " >
        <div style="width: 650px; background-color: rgb(236,227,236); border: solid; margin: auto; padding-left: 40px; padding-top: 30px; padding-bottom: 30px; padding-right: 10px">
            <div style="padding-left: 37%">
                <img style="  width: 5em;  " src="<?php echo base_url('/resources/images/ew-logoicon.svg')?>"/>
            </div>


            <?php


            echo '<input type="hidden" name="hall_id" value="' .$id.'" >
             <h4 style="padding-left: 23%" class="white-w3ls">Reserve Your Restaurants</h4>
            <p style="color: #b8b94f"> <h3>Shoose Your Reservation Time :</h3></p>
                <input id="datetimepicker" type="datetime" name="reservetion_time">
            <p style="color: #b8b94f"> <h3>Type Your Location:</h3></p>
                <input type="text" name="location">
            ';



            echo '<br><br><span id="total" style="color: red; font-size: 30px">0</span>
         <div style="padding-left: 60%" class="form-group">
                    <input type="submit"  value="Accept" class="btn btn-big btn-default" />  
                </div>
        </form>';

            ?>
        </div>
    </div>
</div>





<script>
    function calc(){
        var arr = document.getElementsByClassName('service');
        var tot=0;
        for(var i=0;i<arr.length;i++){
            var k="cost"+arr[i].getAttribute("name").substr(7);
            var price=document.getElementById(k).innerText;
            tot += (parseInt(arr[i].value)*parseInt(price));
        }
        document.getElementById('total').innerText = tot;
    }

    $('#datetimepicker').datetimepicker();
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
</body>
</html>
<?php

$this->load->view('include/header');
?>
<body>
<style>
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}html,body{height:100vh;}body{display:flex;align-items:center;justify-content:center;padding:40px;font:14px/1.5 'Open Sans',sans-serif;color:#345;background:#f0f2f4;}

    p:not(:last-child) {
        margin: 0 0 20px;
    }


    section {
        display: none;
        padding: 20px 0 0;
        border-top: 1px solid #abc;
    }

    input {
        display: none;
    }

    label {
        display: inline-block;
        margin: 0 0 -1px;
        padding: 15px 25px;
        font-weight: 600;
        text-align: center;
        color: #abc;
        border: 1px solid transparent;
    }

    label:before {
        font-family: fontawesome;
        font-weight: normal;
        margin-right: 10px;
    }

    label[for*='1']:before { content: '\f1cb'; }
    label[for*='2']:before { content: '\f17d'; }


    label:hover {
        color: #789;
        cursor: pointer;
    }

    input:checked + label {
        color: #0af;
        border: 1px solid #abc;
        border-top: 2px solid #0af;
        border-bottom: 1px solid #fff;
    }

    #tab_request:checked ~ #request,
    #tab_reserve:checked ~ #reserve
    {
        display: block;
    }

    @media screen and (max-width: 800px) {
        label {
            font-size: 0;
        }
        label:before {
            margin: 0;
            font-size: 18px;
        }
    }

    @media screen and (max-width: 500px) {
        label {
            padding: 15px;
        }
    }
</style>
<main>

    <input id="tab_request" type="radio" name="tabs" checked>
    <label for="tab_request">Request</label>

    <input id="tab_reserve" type="radio" name="tabs">
    <label for="tab_reserve">Reserve</label>


    <section id="request">
        <?php
        foreach ($req as $item){

            $total=0;
            echo $item->approvment_message.$item->location.$item->date;
            foreach ($item->meals as $meal){
                print_r($meal);
                echo $meal->meal_name;
                echo $meal->meal_price;
                echo $meal->qantity;
                $total=$total+($meal->meal_price*$meal->qantity);
            }
            echo 'total is' .$total;
            echo '<form class="singleAmountForm" method="post">
<input type="text" class="form-control" name="approvment_message">
<input type="hidden" class="form-control" value="'.$item->reserv_id.'" name="reserve_id">
<input type="hidden" class="form-control" value="'.$id.'" name="restaurant_id">
<input type="submit" id="singleAmountForm" class="form-control" value="accept" formaction="'.base_url('Provider/restaurant_approve_accept').'">
<input type="submit" onsubmit="return show_alertDenied()" class="form-control" value="denied" formaction="'.base_url('Provider/restaurant_approve_denied').'">';
            echo '
</form><br>';

        }
        ?>
    </section>

    <section id="reserve">
        <?php print_r($res);?>
    </section>



</main><div class="copy-right">
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
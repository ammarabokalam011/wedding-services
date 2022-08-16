<style>
    .im:hover{
        transform: scale(1.02);
    }
</style>
<div class="team-row-agileinfo ">
    <section  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content" style=" ;height: 450px; overflow: hidden "  >
        <div  class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 " >
            <a href="<?php echo base_url('Restaurants/open/').$id?>">
                <img class="im" style="width:550px; height: 450px;" src="<?php echo $image?>"></a>
        </div>
        <a href="<?php echo base_url('Restaurants/open/').$id?>">
        <div class="col-lg-6 col-md-6  content-item content-item-1 background"  >
            <br><br> <h2  class="heading-agileinfo im "><?php echo $name?><span>
            <h3><span class="light-blue-text">Location:</span>
                <?php echo $location?><br><i style="color: #0055cc; font-size: 14px">click for more info</i>
        </div></a>
    </section>
</div>
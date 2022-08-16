<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>







		<a href='<?php echo site_url('admin/avilable_restaurant')?>'>avilable_restaurant</a> |
		<a href='<?php echo site_url('admin/gagainst_group')?>'>gagainst_group</a> |
		<a href='<?php echo site_url('admin/guest_against')?>'>guest_against</a> |
		<a href='<?php echo site_url('admin/guest_with')?>'>guest_with</a> |
		<a href='<?php echo site_url('admin/guests')?>'>guests</a> |
		<a href='<?php echo site_url('admin/gwith_group')?>'>gwith_group</a> |
        <a href='<?php echo site_url('admin/halls')?>'>halls</a>|
        <a href='<?php echo site_url('admin/halls_components')?>'>halls_components</a>|
        <a href='<?php echo site_url('admin/halls_photo')?>'>halls_photo</a>|
        <a href='<?php echo site_url('admin/meals')?>'>meals</a>|
        <a href='<?php echo site_url('admin/reserve_sallonservice')?>'>reserve_sallonservice</a>|
        <a href='<?php echo site_url('admin/reservetion')?>'>reservetion</a>|
        <a href='<?php echo site_url('admin/reservetion_meals')?>'>reservetion_meals</a>|
        <a href='<?php echo site_url('admin/restaurant')?>'>restaurant</a>|
        <a href='<?php echo site_url('admin/restaurant_photo')?>'>restaurant_photo</a>|
        <a href='<?php echo site_url('admin/salons')?>'>salons</a>|
        <a href='<?php echo site_url('admin/salons_photo')?>'>salons_photo</a>|
        <a href='<?php echo site_url('admin/services_salons')?>'>services_salons</a>|
        <a href='<?php echo site_url('admin/tables')?>'>tables</a>|
        <a href='<?php echo site_url('admin/user')?>'>user</a>|
        <a href='<?php echo site_url('admin/wedding_info')?>'>wedding_info</a>
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>

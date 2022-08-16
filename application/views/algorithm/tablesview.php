<?php $this->load->view('include/header')?>

<body>

    <?php
    echo "
<svg   width='$hall->hall_width' height='$hall->hall_height' style=\"fill:rgb(0,0,25);stroke-width:3;stroke:rgb(0,0,0)\" id='myCanvas'>";
foreach ($component as $com){
    $x=$com->x_com_coordinates;
    $y=$com->y_com_coordinates;
    echo "<rect x=\"$x\" y=\"$y\" width=\"$com->width\" height=\"$com->height\"
  style=\"fill:blue;stroke:pink;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.5\" />
  
    ";
    $x=$x+($com->width/3);
    $y=$y+($com->height/3);
    echo "<text x='$x' y='$y' fill='red' font-size='50'>$com->type</text> ";


}
foreach ($tables as $com){
    $x=$com->x_table_coordinates;
    $y=$com->y_table_coordinates;
    echo "<rect x=\"$x\" y=\"$y\" width=\"$com->width\" height=\"$com->height\"
style=\"fill:green;stroke:pink;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.5\" />

";
}
echo "</svg >";
    ?>
</body>
</html>
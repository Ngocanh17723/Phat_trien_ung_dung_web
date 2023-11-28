<?php
function display_images_list($imageList)
{
    foreach ($imageList as $item) {
        echo "<img src ='images/$item'
        width = 50px height = 50px alt ='$item' >";
    }
}
?>
<?php
require('13-function.php');
$items = array('item1.png', 'item2.png');
display_images_list($items);
?>
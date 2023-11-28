<?php
function display_images_list($imageList)
{
    foreach ($imageList as $item) {
        echo "<img src ='images/$item'
        width = 50px height = 50px alt ='$item' >";
    }
}
$items = array('item1.png', 'item2.png');
display_images_list($items);
?>
<h1>function</h1>
<?php
$items = array('items1.png', 'items2.png');
display_images_list($items);
?>
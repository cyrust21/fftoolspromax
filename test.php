<?php
include('simple_html_dom.php');

$html = file_get_html("https://play.google.com/store/apps/details?id=com.dts.freefireth"); //put your app id here

$bannerImage = $html->find('.doc-banner-icon'); //the class we found before

$img = $bannerImage[0]->find('img'); //find the img tag inside the div

$imgUrl = $img[0]->src; //get its src url

$arr = array(); //in my own example I filled this array with other things like the title an screenshots

$arr['imgUrl'] = $imgUrl;

echo json_encode($arr); //output it in an easy to read format

?>

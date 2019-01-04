<?php
// coverting the file into an image
header ('content-type:image/jpeg');

// getting image from source
if(isset($_GET('source'))) {
    $source = $_GET['source'] ;

    //loading and giving the logo a size
    $watermark = imagecreatefrompng('logo.png') ;
    $watermark_width = imagesx($watermark);
    $watermark_height = imagesy($watermark);

    // laoding and giving the image a height
    $image = imagecreatetruecolor($watermark_width, $watermark_height) ;
    $image = imagecreatefromjpeg($source) ;

    // creating the x and y position for the watermark
    $image_size = getimagesize($source);
    $x = $image_size[0] - $watermark_width - 10;
    $y = $image_size[1] - $watermark_height - 10;

    // merging the image and logo using the merge function
imagecopmerge($watermark, $image, $x, $y, 0, 0, $watermark_width, $water_height, 20);

    // puts the image into the page

    // overwritimg the jpeg
    imagejpeg($image, $source.'.$watermarked.jpg') ;

    // note: always better to watermark images as yoou upload them
}
?>
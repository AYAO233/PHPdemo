<?php

    // echo dechex(mt_rand(0,15));
    // echo dechex(mt_rand(0,15));
    // echo dechex(mt_rand(0,15));
    // echo dechex(mt_rand(0,15));
    $nmsg = "";
    for ($i=0;$i<4;$i++) {
        $nmsg .= dechex(mt_rand(0,15));
    }

    header('Content-Type: image/png');
    $im = imagecreatetruecolor(75,25);
    $blue = imagecolorallocate($im,0,201,255);
    $white = imagecolorallocate($im,255,255,255);
    imagefill($im,0,0,$blue);
    imagestring($im,10,20,4,$nmsg,$white);
    imagepng($im);
    imagedestroy($im);

?>
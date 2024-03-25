<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="wallpaper1.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/upload/file/wallpaper.png');
    exit();
}else{
    echo "Invalid Key";
    exit();
}
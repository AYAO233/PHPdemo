<?php
    //打开一个目录
    $dir="d:\ayao2008";
    $dir=iconv("utf-8","gb2312",$dir);
    if ($headle=opendir($dir)){
        while ($file=readdir($headle)){
            $file=iconv("gb2312","utf-8",$file); 
            if ($file!='.' && $file!='..'){
                $dir=iconv("gb2312","utf-8",$dir);
                echo "文件--".$file."--在文件夹--".$dir."--下<br />";
                $dir=iconv("utf-8","gb2312",$dir);
            }
        }
        closedir($headle);
    }












?>
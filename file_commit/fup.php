<?php
    //print_r ([$_SERVER]);
    $file_dir=$_SERVER['DOCUMENT_ROOT']."\\FUP\\";
    //print $file_dir;
    $file_path=$file_dir.md5(microtime()).$_FILES["up"]["name"];
    print $file_path;
    if($_FILES["up"]["size"]<1)
    {
    move_uploaded_file($_FILES['up']['tmp_name'].$file_path);
    }
    else{
        echo"<script>alert('용량이 너무 큽니다')</script>";
    }
    //echo "뭐가 문제일까...";
?>
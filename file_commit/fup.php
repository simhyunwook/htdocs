<?php
    $file=$_FILES['upload']['name'];
    print_r ($file);
    '<br>';
    //print_r ([$_SERVER]);
    $file_dir=$_SERVER['DOCUMENT_ROOT']."\\FUP\\";
    '<br>';
    print $file_dir;
    print microtime();
    $file_path=$file_dir.md5microtime().$file;
    print $file_path;
    if($_FILES["upload"]["size"]<1)
    {
    move_uploaded_file($_FILES['upload']['tmp_name'].$file_path);
    }
    else{
        echo"<script>alert('용량이 너무 큽니다')</script>";
    }
    
?>
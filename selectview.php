<?php
    $location=$_POST["location"];
    if(isset($location)){
        print "태어난 해: ".$location;
    }
    else{
        print "나이를 선택해 주세요";
    }
?>

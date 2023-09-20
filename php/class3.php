<?php
    $a=0;
    $a=2;
    echo $a;
    // if , ifelse(ifelseif) , switch
    $x=5;
    $y=5;
    if($x<=$y){
        echo 'im inside the if condition statement';
    }
    echo "<br>";
    $age=25;

    if($age>=18){
        echo 'welcome to the site';
    }else{
        echo 'access denied only 18+';
    }

    $marks=96;
    echo "<br>";
    if($marks>=90){
        echo 'your grade is A+';
    }else if($marks>=80){
        echo 'your grade is B+';
    }else if($marks>=60){
        echo 'You are pass';
    }else{
        echo 'try again you are fail';
    }
?>
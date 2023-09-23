<?php
    $x=3;
    $y=4;
    $z=5;

    if($x<$y && $x>$z){
        echo 'im and operator and true';
    }

    if($x<$y || $x>$z){
        echo 'im or operator and true';
    }
    $username='irfan';
    $password='ab';

    if($username=='irfan' && $password=='abc'){
        echo '<br> Authentication successfull. You are welcome';
    }else{
        echo '<br> Access denied';
    }


    $a=4;
    $b=5;
    if($a!=$b){
        echo 'im not operator';
    }

    $bol=false;
    if(!$bol){
        echo 'im inside bol';
    }
    echo "<br><br><br>";
    $menu=6;
    switch($menu){
        case 1:
            echo 'case 1 triggered';
            break;
        case 2:
            echo 'case 2 triggered';
            break;
        default:
            echo 'invalid number';
            break;
    }
    echo "<br><br><br>";

    $operation='update';
    switch($operation){
        case 'add':
            echo 'case add triggered';
            break;
        case 'delete':
            echo 'case delete triggered';
            break;
        default:
            echo 'invalid operation';
            break;
    }
?>















<!-- Tax Rule 1: 0% for income up to $20,000
Tax Rule 2: 10% for income between $20,001 and $40,000
Tax Rule 3: 20% for income over $40,000 -->

<?php
    // $income=20001;
    // $netPayment=0;
    // $deduction=0;
    // if($income<=20000){
    //     $deduction=0;
    // }else if($income<=40000){
    //     $deduction=10;
    // }else if($income>40000){
    //     $deduction=20;
    // }
    // $tax=($income/100)-$deduction;
    // $netPayment=$income-$tax;
    // echo $netPayment;
?>


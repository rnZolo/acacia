<?php
    if(isset($_POST['calcu'])){
    $num1 = $_POST['num_1'];
    $num2 = $_POST['num_2'];
    $ope = $_POST['operator'];
    //loosly type language
    if((!is_numeric($num1)) or (!is_numeric($num2))){
        echo "Invalid";
    }else{
        eval( "\$result =".$num1.$ope.$num2.";"); 
        $result = round($result, 2); 
        echo $result;
    }
    }
?>
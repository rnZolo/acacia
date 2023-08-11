<?php
        if(isset($_POST) && !empty($_POST)){
            $peso = $_POST['peso'];
            $fc = $_POST['fc'];
            // echo var_dump($_POST);
            if(empty($_POST['peso'])){
                $err = "Nothing to Convert";
            }elseif($_POST['peso'] < 1){
                    $err = "";
            }else{
            switch ($fc){
                case "dollar": 
                    $converted = round($peso / 56.23);
                    $sign = "$";
                    break;
                case "euro":
                    $converted = round($peso * 0.016);
                    $sign = "€";
                    break;
                case "indian rupee":
                    $converted = round($peso * 1.47);
                    $sign = "₹";
                    break;
                case "japanese yen":
                    $converted = round($peso * 2.54);
                    $sign = "¥";
                    break;
                case "chinese yen":
                    $converted = round($peso * 0.13);
                    $sign = "¥";
                    break;
                default:
                    $converted = "Please Select Foreign Currency";
            }
            }
        }
    ?>
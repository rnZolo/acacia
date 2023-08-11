<?php 
// // open the file using the absolute path and pass permissionmode
//     $file = fopen("/var/www/html/rnzolo/report.txt", 'r'); // open a file or create a file
//     // echo fread($file, filesize("/var/www/html/rnzolo/report.txt"));
//     // filesize("/var/www/html/rnzolo/report.txt"); // return file size per kbytes
//     // echo fgets($file, filesize("/var/www/html/rnzolo/report.txt")); //print the  first line
//     // echo fgets($file, filesize("/var/www/html/rnzolo/report.txt")); //print the next line
//     // echo fgets($file, filesize("/var/www/html/rnzolo/report.txt"));  // and so on
//     // echo gettype(feof($file));//this function is a boolean, checking the file of unknown length
//         while(!feof($file)){
//             echo fgets($file, filesize("/var/www/html/rnzolo/report.txt")). "<br>";// faster loading compared to fgetc
//             // echo fgetc($file); // print per character
//         }
//     fclose($file); 

//     //create file
//     $file2 = fopen("/var/www/html/rnzolo/report2.txt", 'r'); // it will create the file or truncate it if existing
//     $writethis = "Im writing this using fwrite funcion of php \n";
//     // fwrite($file2, $writethis);
//     // fwrite($file2, $write_pointer);
//     fwrite($file2);
//     // echo fread($file2, filesize($file2));

//     // $file2_size = filesize($file2);
//     // echo fread($, $file2_size);
//     // // while(!feof($file2)){
//     // //     f
//     // // }
//     fclose($file2);
    // $append_file = fopen("/var/www/html/rnzolo/report3.txt", 'r');
    // // $append_this = " append again at the end \n";
    // fwrite($append_file, $append_this);
    // echo fread($append_file, filesize("/var/www/html/rnzolo/report.txt"));
    // fclose($append_file);
    $file10 = "/var/www/html/rnzolo/report10.txt";
    // create_file($file10, $file10);
    // function create_file($f, $t){
    //     $file = fopen($f, 'w');
    //     $size = filesize($f);
    //     if(!empty($t)){
    //         $txt = $t;
    //         fwrite($file, $txt);
    //     }
    //     //  echo fread($file,$size);
    //      fclose($file);
    // }
    $file11 = "/var/www/html/rnzolo/report11.txt";
    $file12 = "/var/www/html/rnzolo/report12.txt";
    $wr = "write";
    $create = 'w';
        // touch_file($file12, "", $create);
        touch_file($file11,  $wr, $create);
        
    function touch_file($f, $t, $m){
        $file = fopen($f, $m);
        $size = filesize($f);
        //read
        if($m === "r"){
            echo fread($file, $size);
            fclose($file);
            return echo "end of file";
        }
        //write
        if($m === 'w'){
            //truncate Y or  write F
                fwrite($file, $t);
                fclose($file);
                return echo "write";
        }
        //append
        if($m === "a"){
            fwrite($file, $t);
            fclose($file);
            return echo "append";
        }
    }
// }

?>
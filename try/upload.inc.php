<?php
$err = "";
// echo var_dump($_FILES['fileToUpload']);
// specify the upload folder
$target_dir = "upload/";
//count the file name inside the array
$file_count = count($_FILES['fileToUpload']['name']);
if(isset($_POST['submit'])){
    $upload_prmssn = true;

    for($x = 0; $x < $file_count; $x++){
        // specify exact directory and file name
        $target_file = $target_dir. basename($_FILES['fileToUpload']['name'][$x]);
        $file_name = basename($_FILES['fileToUpload']['name'][$x]);

        //check if file exist
        if(file_exists($target_file)){
           $err = "File Already Exist". "<br>";
            $upload_prmssn = false;
        }

        //tempfile is not empty 
        $temp_name = $_FILES['fileToUpload']['tmp_name'][$x];
        if(empty($temp_name)){
            $err = "failed". "<br>";
            $upload_prmssn = false;
        }
        
        $f_size = getsize($_FILES['fileToUpload']['size'][$x]);//file kb

        //check size
        if($f_size > 500){ 
            $err = "File is too large". "<br>";
            $upload_prmssn = false;
        }

        //check format
        $f_format = strtolower(end(explode('.', $target_file)));
        // echo $f_format. " ";
        $ValidF = array('jpeg', 'png', 'jpg');
        if(!in_array($f_format, $ValidF)){
            $err = "not valid format". "<br>";
            echo'';
            $upload_prmssn = false;
        }

        if(!$upload_prmssn){
            echo '<span class="w-full text-center">'.$file_name.' not uploaded'. "<br>";
           
        }else{
            try{
                move_uploaded_file($temp_name, $target_file);
                // echo $temp_name. ' uplaod to '. $target_file;
                echo '<span class="w-full text-center">'.$file_name. ' is Uploaded</span>'. "<br>";
                echo '<span class="w-full text-center">'.$file_name.' '.$f_size.' kb</span>'. "<br>";
                // echo ' <div class="w-full h-full grid place-content-center absolute m-auto bg-white z-10">
                    //         <div class="w-[200px] h-fit rounded-md drop-shadow-lg">
                    //           <h1 class="font-bolder text-lg"> Up Info</h1>
                    //           <p>'.$result.'</p>
                    //           <p>'.$file_name.' '.$f_size.' k</p>
                    //           <p>'.$exist.'</p>
                    //           <p>'.$tolarge.'</p>
                    //           <p>'.$exist.'</p>
                    
                    //     </div></div>';
                    // // header("location: /rnzolo/file_upload.php");
            }catch(Exception $err){
                echo $err;
            }
        }

        $upload_prmssn = true;
    }
    // echo '<span class="btn bg-green-200 hover:bg-green-400 text-black" ><a href="file_upload.php">Back</a></span>';
}else{
    echo '    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    ';
    echo "<script>toastr.info('Are you the 6 fingered man?')</script>";
}

function getsize($f){
    $size = $f;
    return $converted = number_format($size / 1024, 2);
    // $formated= $converted." kb";
    // echo $formated;
}
?>
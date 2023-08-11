<?php       
    if(isset($_POST['clear'])){
        $clr_dir = './upload/';
        $files = scandir($clr_dir);

        foreach($files as $file){
        $excluded = array('.', '..');
        if(in_array($file, $excluded)){
            continue;
        }else{
        header("Refresh:0; url=file_upload.php");
            $del_file = $clr_dir.$file;
            echo $del_file;
            unlink($del_file);
        }
        }
    } 
               
?>


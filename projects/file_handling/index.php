<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script scr="js/index.js" defer></script>
    <title>Upload</title>
    <style>
        *{
            /* outline: 1px dashed red; */
        }
    </style>
</head>

<body class="w-full min-h-screen">
  <div class="upload w-full h-fit min-h-[300px] py-[10%]  grid place-content-center">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" class="h-fit flex flex-col gap-3 p-3 px-5 bg-blue-400 rounded-md text-black drop-shadow-lg">
            <label for="fileToUplaod"> Select Image to upload</label>
            <input type="file" name="fileToUpload[]" id="fileToUpload" multiple access="img/jpg, img/png, img/jpeg" required>
            <input type="submit" value="Upload Image" name="submit" class="btn text-black hover:text-white">
            <div class="h-[100px] flex flex-col gap-1 overflow-y-auto">
                <?php require_once "./upload.inc.php";
                        echo '<span class="w-full text-center">'.$err.'</span>'. "<br>";
                ?>
            </div>
        </form>
  </div>
  <?php        
      require_once './clear.inc.php';
  ?>
  <div class="w-full h-[70px] p-2 border-b-[3px] flex overflow-hidden">
<h1 class="text-lg font-bolder text-white inline-block w-[90%] ">Uploaded</h1>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <input type="submit" name="clear" class="btn btn-warning text-white hover:bg-red-500" value="clear">
        </form>
  </div>
  <div class="uploaded w-full max-h-[30px] p-10 flex flex-wrap gap-4 ">
        <?php
        // directory
        $dir = './upload';
        // put the files in array
        $files = scandir($dir);
        foreach($files as $file) {
            // exclude this folder
            $excluded = array('.', '..');
            // skip loop if match
            if(in_array($file, $excluded)) continue;
            // echo div and image
            echo '<div class="img w-[150px]  aspect-square bg-white-100 grid place-content-center overflow-hidden">
            <img src="./upload/'.$file.'" alt="'.$file.'" class="w-full h-full object-fill">
            </div>';
        }
        ?>    
  </div>
       
  </div>

</body>
</html>
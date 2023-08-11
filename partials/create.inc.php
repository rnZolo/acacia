<?php
    $proj_folder = './projects/';
    if(isset($_POST["create_project"])){
        if(!empty($_POST['project_name'])){
            echo var_dump($_POST);
            $project_name = $_POST['project_name'];
                    if(!is_dir($proj_folder.$project_name)){
                        //create folder
                        mkdir($proj_folder.$project_name, 0777, true);
                        chmod($proj_folder.$project_name, 0777);
                            $sub_folder = array("css", 'js', "pages", "public", "img");
                                    foreach($sub_folder as $sfolder){
                                        mkdir($proj_folder.$project_name."/".$sfolder, 0777);
                                        chmod($proj_folder.$project_name."/".$sfolder, 0777);
                                    }
                        create_template($project_name);
                        echo "
                            <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                            <script> 
                                swal('Success!', 'Project has been created', 'success') 
                                .then(() => { window.location.href = './index.php';}); 
                            </script>";
                    }else{
                        echo "
                            <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                            <script> 
                                swal('Failed!', 'Already Exist', 'error') 
                                .then(() => { window.location.href = './index.php';}); 
                            </script>";
                    }
                }else{
                    echo "
                            <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                            <script> 
                                swal('Failed!', 'Failed to create', 'error') 
                                .then(() => { window.location.href = './index.php';}); 
                            </script>";
                }
    }
    
    function create_template($pr){
        $file = "./projects/".$pr."/index.php";
        echo $file;
        $index_f = fopen($file, "w");
        fwrite($index_f);
        fclose($index_f);
        chmod($file, 0777);
    }
?>
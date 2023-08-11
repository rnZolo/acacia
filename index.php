<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require './partials/cdn.inc.php'?>
</head>
<body class="bg-blue-50 w-full min-h-screen flex flex-col items-center font-[outfit]">
    <!-- header -->
    <?php include './partials/header.php' ?>

    <div class="flex md:flex-row flex-col gap-10 mt-[100px] mx-[5%] max-w-[1440px] w-full">
        <div class="md:w-[70%] w-full md:min-h-[80vh] flex flex-col gap-6">
            <!-- create project -->
            <div class="bg-white p-5 rounded-xl shadow-xl">
                <div class="flex justify-between items-center justify-center">
                    <p class="text-blue-400 text-[18px] font-semibold mb-3">Create new project</p>
                    <div class="form-control">
                        <label class="label cursor-pointer gap-3">
                            <span class="label-text text-base">Custom</span> 
                            <input type="checkbox" class="toggle"/>
                        </label>
                    </div>
                </div>
                <!-- default -->
                <div class="w-full flex flex-col gap-3">
                    <p>Default</p>
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="w-full flex flex-col gap-3">
                        <input type="text" name="project_name" placeholder="Project name" class="input input-bordered w-full" />
                        <button type="submit" name="create_project" class="btn btn-success btn-active ml-auto mt-auto">Create</button>
                    </form>
                    <?php
                        include_once './partials/create.inc.php';
                    ?>
                </div>

                <!-- custom -->
                <div class="w-full flex flex-col hidden">
                    <p>Custom</p>
                    <button type="button" class="btn btn-success btn-active ml-auto mt-auto">Create</button>
                </div>
            </div>

            <!-- delete project -->
            <div class="bg-white p-5 rounded-xl shadow-xl">
                <div class="flex justify-between items-center justify-center">
                    <p class="text-blue-400 text-[18px] font-semibold mb-3">Delete project</p>
                </div>

                <div class="w-full">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="w-full flex flex-col gap-3">
                        <select class="select select-bordered w-full" name="del_folder">
                            <option disabled selected value="">Select Project</option>
                            <?php
                                include_once './partials/project_folders.inc.php';
                                include './partials/delete_list.inc.php';
                            ?>
                        </select>
                        <button type="submit" name="delete" class="btn btn-error btn-active ml-auto mt-auto">Delete</button>
                        <?php
                            if(isset($_POST['delete'])){
                                if(!empty($_POST['del_folder'])){  
                            
                                    $del_folder = $_POST['del_folder'];
                                    // // $r = opendir('./del/this');
                                    // // echo var_dump($r);
                                    // // chmod($del_folder, 0777);
                                    // echo $del_folder;
                                    // rmdir($del_folder);
                                    if(is_dir($del_folder)){
                                        $dir = opendir($del_folder);
                                        while (($file = readdir($dir)) !== false) {
                                            if(!in_array($file, $non_related_folder)){

                                                $sub1 = $del_folder.'/'.$file;
                                                echo "folder: ".$sub1."<br>";
                                                if(is_dir($sub1)){
                                                    $xo = opendir($sub1);
                                                    while (($xox = readdir($xo)) !== false){
                                                        if(!in_array($xox, $non_related_folder)){
                                                        echo "folder: ".$del_folder.$subfolder.$xox."<br>";
                                                        
                                                        }
                                                    }
    
                                                }
                                                
                                            }
                                           
                                        }
                                    }
                                    // $item = readdir($dir);
                                    echo var_dump($item);
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>

            <!-- rename project -->
            <div class="bg-white p-5 rounded-xl shadow-xl">
                <div class="flex justify-between items-center justify-center">
                    <p class="text-blue-400 text-[18px] font-semibold mb-3">Rename project</p>
                </div>

                <div class="w-full flex flex-col gap-3">
                    <div class="flex gap-3 md:flex-row flex-col">
                        <select class="select select-bordered w-full">
                            <option disabled selected>Select Project</option>
                            <?php
                            include_once './partials/rename_list.inc.php'
                            ?>
                        </select>
                        <input type="text" placeholder="New name" class="input input-bordered w-full" />
                    </div>
                    <button type="button" class="btn btn-info btn-active ml-auto mt-auto">Rename</button>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl md:w-[30%] w-full md:min-h-[80vh] p-5  shadow-xl">
            <p class="text-blue-500 text-[18px] font-semibold mb-3">My projects</p>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead class="text-base bg-blue-400 text-white">
                        <tr>
                            <th></th>
                            <th>Project name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once './partials/project_list.inc.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
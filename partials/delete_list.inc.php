<?php
    // delete list
    if(isset($_POST)){
            if($folder_count > 0){
                // display all valid folders
                foreach($valid_folders as $project){
                    echo"<option value='./projects/$project' class='p-1'>$project</option>";
                }
            }else{
                // display no results
                echo"<option value='' disabled selected class='p-1'>No Projects Yet</option>";
            }
    }
?>
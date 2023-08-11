<?php
    //view projects
        // if click
    if(isset($_POST)){
        $no = 1;
            if($folder_count > 0){
                // display all valid folders
                foreach($valid_folders as $project){
                    echo"<tr class='hover:bg-blue-50'>
                    <th>$no</th>
                    <td><a href='./projects/$project/index.php' class='btn btn-link'>$project</a></td>
                    </tr>";
                    $no++;
                }
            }else{
                // display no results
                echo "<p class='text-[24px] text-gray-300 font-semibold'>No project yet</p>";
            }
    }
?>
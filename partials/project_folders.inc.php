<?php
    //projects folders
    // indicate root directory
    $proj_folder = './projects/';
    // list of all folders
    $exstng_projects =  scandir($proj_folder);
    // list of  non related folder
    $non_related_folder = array('.', '..');
    // valid folders
    $valid_folders = array_diff($exstng_projects, $non_related_folder);
    //count of valid folder
    $folder_count = count($valid_folders);

?>
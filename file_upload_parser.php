<?php
    $source_path = $_FILES['file1']['tmp_name'];
    $target_path = 'upload/' .$_FILES['file1']['name'];
    if(move_uploaded_file($source_path, $target_path))
    {
        echo "Uploaded ".$_POST['firstName'];

    }else{
        echo "Something went wrong";
    }
?>
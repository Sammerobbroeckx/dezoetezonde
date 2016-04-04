<?php

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    // Controleren of het bestand een foto is
    
    if(isset($_POST["submit"])) 
    {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) 
        {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else 
        {
            $uploadOk = 0;
        }
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) 
    {
        echo "Sorry, alleen JPG, JPEG, PNG & GIF bestanden zijn toegestaan.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) 
    {
        echo "Sorry, we konden je bestand niet uploaden.";
    // if everything is ok, try to upload file
    } 
    else 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
            echo "Het bestand ". basename( $_FILES["fileToUpload"]["name"]). " is upgeload.";
        } else 
        {
            echo "Sorry, er is iets misgelopen tijdens het uploaden.";
        }
    }

?>
<?php

//include database configuration file
include 'dbConfig.php';

print_r($_REQUEST);
die();

if (!empty($_POST['name']) || !empty($_POST['email']) || !empty($_FILES['file']['name'])) {
    $uploadedFile = '';
    if (!empty($_FILES["file"]["type"])) {
        $fileName         = time() . '_' . $_FILES['file']['name'];
        $valid_extensions = array(
            "jpeg",
            "jpg",
            "png"
        );
        $temporary        = explode(".", $_FILES["file"]["name"]);
        $file_extension   = end($temporary);
        if ((($_FILES["hard_file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)) {
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "uploads/" . $fileName;
            if (move_uploaded_file($sourcePath, $targetPath)) {
                $uploadedFile = $fileName;
            }
        }
    }
    
    $name  = $_POST['name'];
    $email = $_POST['email'];
    
    //include database configuration file
    require 'dbConfig.php';
    
    //insert form data in the database
    // $insert = $db->prepare("INSERT form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')");
    
    $stmt = $db->prepare("INSERT INTO form_data (name, email, file_name) VALUES (:name, :email, :file_name)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':file_name', $uploadedFile);
    $stmt->execute();
    print_r($stmt);
    
    die();
    echo $insert ? 'ok' : 'err';
}
die();
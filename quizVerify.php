<?php
// include files and start session 
require_once('functions.php');
session_start();

if(isset($_POST["submit"])){ // when subit is pressed
// assign variables   
$name = trim($_POST["dogName"]); // trim elimates whitespaces
$gender = trim($_POST["dogGender"]);
$size = trim($_POST["dogSize"]);
$breed = trim($_POST["dogBreed"]);
$owner = " ";
$document_root = $_SERVER['DOCUMENT_ROOT'];
$file = $_FILES['fileToUpload'];
$fileName = $_FILES['fileToUpload']['name'];
$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
$fileError = $_FILES['fileToUpload']['error'];
$fileType = $_FILES['fileToUpload']['type'];// Gets the ext of file

 //if there is a error then display error sign
 if($fileError > 0){ 
    echo 'Problem: ';
    switch ($fileError) {
        case 1:
            echo 'File exceed upload_max_file_size.';
            break;
        case 2:
            echo 'File exceed max_file_size';
            break;
        case 3: 
            echo 'File only partially uploaded.';
        break;
        case 4: 
            echo 'No file uploaded.';
        break;
        case 6:
            echo 'Cannot upload file: No temp directory specified.';
        break;
        case 7: 
            echo 'Upload failed: Cannot write to disk';
        break;
        case 8: 
            echo 'A PHP extension blocked the file upload';
        break;
        default:
            break;
    }
} 

$uploaded_file = 'uploads/'.$fileName;

if(is_uploaded_file($fileTmpName)){
    if(!move_uploaded_file($fileTmpName,$uploaded_file)){
        echo 'Problem: Could not move file to destination directory';
        exit;
    }
}

// this checks if the file extension is correct
if($fileType != 'image/jpeg' && $fileType != 'image/png'){
    echo 'Problem: file is not a PNG image or a JPEG: ';
    exit;
} 
if(!isset($_SESSION['valid_user'])){
    echo 'something went wrong';
    exit();
} else {
    $owner = $_SESSION['valid_user'];
}

dogInfo($name, $gender, $size, $breed, $uploaded_file, $owner);
header( 'Location: homepage.php');
}
?>
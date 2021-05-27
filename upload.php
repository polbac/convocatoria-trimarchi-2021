<?php 
$STATUS_SUCCESS = "status_success";
$STATUS_ERROR = "status_error";
$UPLOAD_DIR = 'uploads/';
$timestamp = time();

if(empty($_FILES["file"]["name"])) {
    echo json_encode(
        array( 
            'status' => $STATUS_ERROR, 
            'message' => 'empty_file' 
        )
    );
    return;
}

$fileType = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); 
$fileName = $timestamp.'.'.$fileType; 
$targetFilePath = $UPLOAD_DIR . $fileName;  

$allowTypes = array('mp3', 'jpg', 'png', 'jpeg', 'gif'); 

if(in_array($fileType, $allowTypes)){ 
    // Upload file to the server 
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
        $uploadedFile = $fileName; 
        $uploadStatus = $STATUS_SUCCESS;        
    }else{ 
        $uploadStatus = $STATUS_ERROR; 
        $response['message'] = 'cant_upload_file'; 
    } 
}else{ 
    $uploadStatus = $STATUS_ERROR; 
    $response['message'] = 'extension_not_allowed'; 
} 

echo json_encode(
    array( 
        'status' => $uploadStatus, 
        'file' => $fileName 
    )
);

?>
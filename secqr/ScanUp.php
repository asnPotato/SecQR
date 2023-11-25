<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
  $file = $_FILES['image'];

  // Specify the destination directory where you want to save the uploaded file
  $uploadDirectory = 'upload/';

  // Generate a unique filename for the uploaded file
  $filename = $file['name'];

  // Move the uploaded file to the destination directory
  $targetPath = $uploadDirectory . $filename;
  if (move_uploaded_file($file['tmp_name'], $targetPath)) {
    // File uploaded successfully

}
}
?>
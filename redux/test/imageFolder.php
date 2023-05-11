<?php
$folderPath = 'images/'; // Path to the folder containing the images
$fileNames = [];

// Open the folder
if ($handle = opendir($folderPath)) {
    // Loop through each file in the folder
    while (false !== ($file = readdir($handle))) {
        // Skip directories and non-image files
        if ($file != "." && $file != ".." && (strtolower(pathinfo($file, PATHINFO_EXTENSION)) == 'jpg' || strtolower(pathinfo($file, PATHINFO_EXTENSION)) == 'png')) {
            $fileNames[] = $file; // Add the file name to the array
        }
    }
    closedir($handle); // Close the folder
}

// Return the file names as a JSON response
header('Content-Type: application/json');
echo json_encode($fileNames);
?>

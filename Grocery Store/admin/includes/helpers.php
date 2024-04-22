<?php



function uploadImage($targetDir = "", $file, $size = 5)
{
    $targetDir = "images/$targetDir/";
    $newName   = time() . $file['name'];

    $data = ['errors' => false, 'result' => null];

    $max_size = $size * 1024 * 1024;
    $types = ['image/jpg', 'image/png', 'image/jpeg'];

    if ($file['error'] === 0) {
        if ($file['size'] > $max_size) {
            $data['errors'] = true;
            $data['result'] = "Image size is too large";
            return $data;
        }

        // check image extension
        if (in_array($file['type'], $types) === false) {
            $data['errors'] = true;
            $data['result'] = "Extension not supported";
            return $data;
        }

        if(move_uploaded_file($file['tmp_name'], $targetDir . $newName) == true ) {
            $data['errors'] = false;
            $data['result'] = $newName;
            return $data;
        }
        
    } else {
        $data['errors'] = true;
        $data['result'] = "something went wrong";
    }

    return $data;
}


function pp($data) {
    echo "<pre>"; print_r($data); echo "</pre>";
    exit;
}
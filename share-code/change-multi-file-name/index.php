<?php 
    echo '<h3 style="color:red">' . __FILE__ . '</h3>';

    $inPath  = './input/';
    $outPath = './output/';

    function generateRandomString($length = 10) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    
    // XX.jpg

    $files = scandir($inPath);

    if(count($files) > 0){
        foreach($files as $fileName) {
            if($fileName == '.' || $fileName == '..') continue;
            $file       = $inPath . $fileName;
            $newfile    = $outPath . generateRandomString(5) . '.' . pathinfo($fileName, PATHINFO_EXTENSION);

            if (!copy($file, $newfile)) { echo "failed to copy $file...\n"; }
        }
    }


    
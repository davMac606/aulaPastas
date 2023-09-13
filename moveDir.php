<?php
$dir1 = "pasta1";
$dir2 = "pasta2";


if(!is_dir($dir1)) {
    mkdir($dir1);
    echo "Pasta $dir1 criada com sucesso!";
}
else {
    echo "A pasta $dir1 já existe.";
}

if (!is_dir($dir2)) {
    mkdir($dir2);
    echo "Pasta $dir2 criada com sucesso!";
}
else {
    echo "A pasta $dir2 já existe.";
}

$filename = "README.txt";

if (!file_exists($dir1. DIRECTORY_SEPARATOR . $filename)) {
    $file = fopen($dir1. DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
} 
else {
    echo "O arquivo $filename já existe na pasta $dir1.";
}

rename($dir1. DIRECTORY_SEPARATOR . $filename, $dir2. DIRECTORY_SEPARATOR . $filename); 

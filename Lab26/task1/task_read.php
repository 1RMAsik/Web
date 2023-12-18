<?

$file_path = 'info.txt';

if(file_exists($file_path)) {
    $info = file_get_contents($file_path);

    echo nl2br($info);
} else {
    echo "Файл не найден!";
}
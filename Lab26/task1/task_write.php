<?php

$file_path = 'info.txt';

$info = "ФИО: Самойлов Никита Ильич\nГруппа: 9ПЗ-56\n";

$date_time = date('Y-m-d H:i:s');
$info .= "Дата и время: $date_time\n";

file_put_contents($file_path, $info);

echo "Файл создан!";

?>

<a href="task_read.php"><button>Посмотреть содержимое файла</button></a>
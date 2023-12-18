<?php

$file_path = 'matrix_data.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $input_data = $_POST['inputData'];

    file_put_contents($file_path, $input_data);

    echo "Данные успешно сохранены";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
<form action="" method="post">
    <label for="inputData">Введите данные (строки или матрицу):</label><br>
    <textarea id="inputData" name="inputData" rows="10" cols="30"></textarea><br>
    <input type="submit" value="Сохранить в файл">
</form>
</body>
</html>

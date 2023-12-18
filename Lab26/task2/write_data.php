<?php
// Путь к файлу
$file_path = 'matrix_data.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем введенные данные
    $inputData = $_POST['inputData'];

    // Записываем данные в файл
    file_put_contents($file_path, $inputData);
}

// Чтение данных из файла
$dataFromFile = file_get_contents($file_path);

// Преобразование данных в массив (предполагается, что это матрица)
$lines = explode("\n", $dataFromFile);
$matrix = [];

foreach ($lines as $line) {
    $matrix[] = explode(' ', $line);
}

// Ищем наибольший элемент главной диагонали
$maxElement = $matrix[0][0];
$maxRow = $matrix[0];

for ($i = 1; $i < count($matrix); $i++) {
    if ($matrix[$i][$i] > $maxElement) {
        $maxElement = $matrix[$i][$i];
        $maxRow = $matrix[$i];
    }
}

// Вывод результатов
echo "Исходные данные:<br>";
echo nl2br($dataFromFile);

echo "<br><br>Наибольший элемент главной диагонали: $maxElement<br>";
echo "Строка, в которой он находится: " . implode(" ", $maxRow);

// Добавляем ссылку на первую страницу с передачей данных
echo '<br><br><a href="input_data.php?data=' . urlencode($dataFromFile) . '">Вернуться к вводу данных</a>';
?>

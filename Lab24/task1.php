

<?php
function generateForm() {
    echo <<<HTML
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>

<form action="task1.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Вариант 2</legend>
    <label for="language">Какой язык вы хотите изучать:</label>
    <select name="language" id="language">
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
        <option value="HTML">HTML</option>
    </select>
    <br>

    <label for="gender">Выберите пол:</label>
    <label>
        <input type="radio" name="gender" value="Мужской">
    </label>Мужской
    <label>
        <input type="radio" name="gender" value="Женский">
    </label>Женщина
    <br>

    <label for="file">Выберите файл:</label>
    <input type="file" name="file" id="file" style="display:none">
    <button type="button" onclick="chooseFile()">Выбрать файл</button>
    <br>

    <input type="submit" value="Отобразить">
    </fieldset>
</form>

<script>
    function chooseFile() {
        document.getElementById('file').click()
    }
</script>
</body>
</html>

HTML;

}

generateForm();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $language = isset($_POST['language']) ? $_POST['language'] : '';

    if (!empty($gender)) {
        echo "Выбран пол: $gender <br>";
    } else {
        echo "Пол не выбран <br>";
    }

    if (!empty($language)) {
        echo "Выбран язык программирования: $language <br>";
    } else {
        echo "Язык программирования не выбран <br>";
    }

    if(isset($_FILES['file']) && $_FILES['file']['error'] === 0){
        $uploadFile = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
        echo "Выбран файл: $uploadFile <br>";
    } else {
        echo "Файл не выбран <br>";
    }
}



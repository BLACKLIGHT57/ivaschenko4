<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
    if (!empty($_GET['save'])) {
      // Если есть параметр save, то выводим сообщение пользователю.
      print('Спасибо, результаты сохранены.');
    }
    // Включаем содержимое файла form.php.
    include('form.php');
    // Завершаем работу скрипта.
    exit();
  }
// Подключение к базе данных
$servername = "localhost";
$username = "u67377";
$password = "5414278";
$dbname = "u67377";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обработка данных из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fio = $_POST["fio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $birth_date = $_POST["birth_date"];
    $gender = $_POST["gender"];
    $favorite_languages = implode(", ", $_POST["favorite_languages"]);
    $biography = $_POST["biography"];
    $contract_accepted = isset($_POST["contract_accepted"]) ? 1 : 0;

    // SQL-запрос для вставки данных в таблицу
    $sql = "INSERT INTO FormData (fio, phone, email, birth_date, gender, biography, contract_accepted) 
            VALUES ('$fio', '$phone', '$email', '$birth_date', '$gender', '$biography', '$contract_accepted')";
           
   

    if ($conn->query($sql) === TRUE) {
        echo "Данные успешно сохранены в базе данных";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
    $sql = "INSERT INTO FormData1 (favorite_languages)

    VALUES ('$favorite_languages')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Данные успешно сохранены в базе данных";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

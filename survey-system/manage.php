<?php
$host =  'localhost';
$db = 'opnion'; //اسم دیتابیس ذخیره سازی شما!
$user =  'root';
$password = '1234';


$connect = new mysqli($host, $user, $password , $db);



// فرض بر این است که شما متغیر session برای ورود کاربر دارید
session_start();
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
    echo "<div class='icons'>";
    echo "<box-icon name='moon'></box-icon>";
    echo "<box-icon name='sun' type='solid' flip='horizontal' animation='tada'></box-icon>";
    echo "</div>";
}

if($connect->connect_error) {
    die("Connction Failed!:" . $connect->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // var_dump($_POST); // چاپ داده‌های ارسال شده
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

 // دریافت مقادیر انتخاب شده از چک باکس‌ها
    $cars = isset($_POST['cars']) ? implode(",", $_POST['cars']): '';

 // ساختار کوئری INSERT با مقادیر چک باکس‌ها

$mysql = "INSERT INTO survey_responses (name, email, feedback, cars) VALUES ('$name', '$email', '$feedback', '$cars')";


    if($connect->query($mysql) === TRUE) {
        echo "نظرسنجی با موفقیت ارسال شد!";

    }else {
        echo "خطا:" . $mysql . "<br>" . $connect -> error;
    }
}

$connect -> close();
?>
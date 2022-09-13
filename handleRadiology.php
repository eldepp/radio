<?php
Require_once __DIR__ . '/radiologyDbConnection.php';
require_once __DIR__ .'/handleRadiology.php';

if (isset($_POST['submit'])) {
    extract($_REQUEST);
    $errors = [];
    if (empty($name)) {
        $errors = "name is required";
    } elseif (is_numeric($name)) {
        $errors = "name must be string";
    } elseif (!(strlen($name) > 5 && strlen($name) < 100)) {
        $errors = "name must be between 5 & 100";
    } 

    if (empty($email) ) {
        $errors = "email is required";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors = "not valid email";
    }

    if (empty($number) ) {
        $errors = "number is required";
    }elseif (!is_numeric($number)){
        $errors = "Phone must be numeric";
    } elseif (strlen($number) < 11) {
        $errors = "number must be grater than 11 number";
    }





    if (empty($errors)) {
        db_insert($name, $email, $number, $unit, $category, $test, $charge);
        header('location: http://localhost/clinic/radio/index.php');
    } else {
        var_dump($errors);
    }
} else {
    header('location: radiology.php');
}


function db_insert($name, $email, $number, $unit, $category, $test, $charge){

    $conn = db_connect();
    $stmt = mysqli_prepare($conn, "insert into radiology(name, email, number, unit, category, test, charge) values(?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sssssss', $name, $email, $number, $unit, $category, $test, $charge);
    mysqli_stmt_execute($stmt);

}


<?php

require('function.php');
// error variable
$error = array();

$name = validate_input_text($_POST['name']);
if (empty($name)) {
    $error[] = "이름을 입력하지 않았습니다.";
}

$email = validate_input_email($_POST['email']); // name에서 지정한 부분의 값을 가져옴
if (empty($email)) {
    $error[] = "이메일을 입력하지 않았습니다.";
}

if (empty($error)) {
    // register a new user
    require('mysqli_connect.php');

    $query = "INSERT INTO user (userID, name, phone, age, birth, email)";
    $query .= "VALUES('',?,?,?,?,?)";
} else {
    echo 'not validate';
}

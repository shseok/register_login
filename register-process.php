<?php

require('function.php');
// error variable
$error = array();

$name = validate_input_text($_POST['name']);
if (empty($name)) {
    $error[] = "이름을 입력하지 않았습니다.";
}

$phone = $_POST['phone'];
$age = $_POST['age'];
$address = $_POST['address'];
$birth = $_POST['birth'];
$gender = $_POST['gender'];

$email = validate_input_email($_POST['email']); // name에서 지정한 부분의 값을 가져옴
if (empty($email)) {
    $error[] = "이메일을 입력하지 않았습니다.";
}

if (empty($error)) {
    // register a new user
    require('mysqli_connect.php');

    // $query = "INSERT INTO user (userID, userName, phone, age, birth, email) VALUES (NULL,?,?,?,?,?)";
    $query = "INSERT INTO newuser (uid, name, phone_num, age, bDate, gender, address, email)";
    $query .= "VALUES(NULL,?,?,?,?,?,?,?)"; // userID는 auto increment

    // statement초기화
    $q = mysqli_stmt_init($conn);
    // sql statement 준비
    mysqli_stmt_prepare($q, $query);
    // bind values
    mysqli_stmt_bind_param($q, 'sssssss', $name, $phone, $age, $birth, $gender, $address, $email);
    // statment 실행
    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1) {
        header('location: login.php'); // 등록하면 login페이지로
    } else {
        print "Error while registration...!";
    }
} else {
    echo 'not validate';
}

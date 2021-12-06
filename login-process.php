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
    // $query = "SELECT userID, userName, phone, age, birth, email FROM user WHERE userName=?";
    $query = "SELECT uid, name, phone_num, age, bDate, gender, address, email FROM newuser WHERE name=?";
    $q = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($q, $query);

    mysqli_stmt_bind_param($q, 's', $name);

    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);
    // key와 value로 배열을 달라
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo $row;
    if (!empty($row)) {
        // 이메일이 같은지 확인
        if ($email == $row['email']) {
            header("location: index.php");
            exit();
        }
    } else {
        print "확인되지 않았습니다. 다시 등록해주세요....";
    }
} else {
    echo "Please Fill out email and password to login!";
}

# Introduction📢
This is Database Team 6's Register & Login Page

# session
login -> index.php에 유저 정보


# error catch
1. register-process.php에서 $query .= ... <- auto increment부분을 ''가 아닌 NULL로 바꿔주어야 들어간다
2. 경로 체크
    - link의 css 위치가 ```<link rel="stylesheet" href="../database_main/style.css">```로 바뀌여야 함. index.php에서 include하고 있으므로 database_main에 있는 style.css의 경로는 index.php기준으로 설정해준다
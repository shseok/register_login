<?php
include("header.php");
?>

<?php
require('mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('login-process.php');
}
?>

<!-- 회원가입 -->
<section id="login-form">
    <div class="row m-0">
        <div class="col-lg-12">
            <div class="text-center pt-5 pb-5">
                <h1 class="log-title text-dark">로그인</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">로그인하고 추가 기능을 즐기세요!</p>
                <span class="font-ubuntu text-black-50">새로운 계정<a href="register.php"> 만들기</a></span>
            </div>
            <div class="profile">
                <div class="user-wrapper text-center">
                    <span class="user"><i class="far fa-user fa-3x"></i></span>
                    <div class="wrapper">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-from">

                    <div class="form-col my-2" style="min-width: 280px;">
                        <input type="text" required name="name" id="name" class="form-control" placeholder="성함*">
                    </div>
                    <div class="form-col my-2" style="min-width: 280px;">
                        <input type="email" required name="email" id="email" class="form-control" placeholder="이메일*">
                    </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">로그인</button>
                    </div>
                </form> <!-- 양식이 제출된 위치에 양식 데이터를 보냄-->
            </div>
        </div>
    </div>
</section>
<!-- 회원가입 -->

<?php
include("footer.php");
?>
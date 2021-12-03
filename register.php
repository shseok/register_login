<?php
include("header.php");
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('register-process.php');
}
?>

<!-- 회원가입 -->
<section id="register">
    <div class="row m-0">
        <div class="col-lg-12">
            <div class="text-center pt-5 pb-5">
                <h1 class="log-title text-dark">회원가입</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">환영합니다🎉 추가적인 혜택을 누리세요!</p>
                <span class="font-ubuntu text-black-50">이미 등록했어요. <a href="login.php">로그인</a></span>
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
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-from">
                    <div class="form-col" style="min-width: 280px;">
                        <div class="col">
                            <!-- php를 value에 써준 이유는 제출시 오륙 나도 기존에 존재하도록 하기 위함. 어디서 오류났는지 알기위해  -->
                            <input type="text" <?php if (isset($_POST['name'])) echo $_POST['name']; ?> name="name" id="name" class="form-control" placeholder="성함">
                        </div>
                        <div class="col my-2">
                            <input type="tel" <?php if (isset($_POST['phone'])) echo $_POST['phone']; ?> required name="phone" id="phone" class="form-control" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="전화번호 (양식: 000-0000-0000)* 
                             ">
                        </div>
                        <div class="col my-2">
                            <input type="number" <?php if (isset($_POST['age'])) echo $_POST['age']; ?> required name="age" id="age" class="form-control" placeholder="나이*">
                        </div>

                        <div class="col my-2">
                            <input type="text" <?php if (isset($_POST['birth'])) echo $_POST['birth']; ?> required name="birth" id="birth" class="form-control" placeholder="생년월일*" onfocus="(this.type = 'date')">
                        </div>
                        <div class="col my-2">
                            <input type="text" <?php if (isset($_POST['address'])) echo $_POST['address']; ?> required name="address" id="address" class="form-control" placeholder="주소*">
                        </div>
                        <div class="col my-2">
                            <input type="email" <?php if (isset($_POST['email'])) echo $_POST['email']; ?> required name="email" id="email" class="form-control" placeholder="이메일*">
                        </div>
                        <div class="form-check form-check-inline pl-4">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">개인정보 동의<a href="#"> 자세히 보기</a>(*)</label>
                        </div>

                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">계속</button>
                        </div>
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
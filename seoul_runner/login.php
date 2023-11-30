
<?php
    include('header.php');
?>

<main>
    <section>
        <div class="wrap">
            <div class="signin-box">
                <p class="big-tit">로그인</p>
                <div class="box">
                    <div class="sml-tit">아이디</div>
                    <input type="text" placeholder="아이디를 입력해주세요.">
                    <div class="sml-tit">비밀번호</div>
                    <input type="password" placeholder="비밀번호를 입력해주세요.">
                    <button type="button" class="btn bc-btn" onclick="location.href='index.php';">로그인</button>
                    <p class="expl">아직 <b>SEOUL RUNNER</b> 사용자가 아니신가요?</p>
                    <a href="register.php" class="rgs-go">사용자등록</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include('footer.php');
?>

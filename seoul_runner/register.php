
<?php
    include('header.php');
?>

<main>
    <section>
        <div class="wrap">
            <div class="signin-box">
                <p class="big-tit">사용자등록</p>
                <div class="box">
                    <div class="sml-tit required">아이디</div>
                    <input type="text" placeholder="아이디를 입력해주세요.">
                    <div class="sml-tit required">비밀번호</div>
                    <input type="password" placeholder="비밀번호를 입력해주세요.">
                    <div class="sml-tit required">비밀번호 확인</div>
                    <input type="password" placeholder="비밀번호를 한번 더 입력해주세요.">
                    <div class="sml-tit required">닉네임</div>
                    <input type="text" placeholder="닉네임을 입력해주세요.">
                    <div class="sml-tit required">약관동의</div>
                    <div class="terms-box">
                        <label for="terms_chk_1">
                            <input type="checkbox" id="terms_chk_1">
                            이용약관에 동의합니다.
                        </label>
                        <button type="button" class="terms-btn1">보기</button>
                    </div>
                    <div class="terms-box mb-50">
                        <label for="terms_chk_2">
                            <input type="checkbox" id="terms_chk_2">
                            개인정보처리방침에 동의합니다.
                        </label>
                        <button type="button" class="terms-btn2">보기</button>
                    </div>
                    <button type="button" class="btn bc-btn" onclick="location.href='login.php';">등록하기</button>
                    <a href="#" onClick="history.back()" class="rgs-go">돌아가기</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include('footer.php');
?>

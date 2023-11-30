
<footer>
    <div class="footer-wrap">
        <div class="wrap">
            <div class="left">
                <a href="index.php" class="logo">SEOUL RUNNER</a>
                <div class="terms">
                    <button type="button" class="terms-btn1">이용약관</button>
                    <button type="button" class="terms-btn2">개인정보처리방침</button>
                </div>
            </div>
            <div class="copy">
                COPYRIGHT 2023. <span>SEOUL RUNNER</span> ALL RIGHTS RESERVED.
            </div>
        </div>
    </div>
</footer>

</body>
</html>


<!--이용약관 모달-->
<div class="modal terms1">
    <div class="terms-box">
        <div class="tit-box">
            <span>이용약관</span>
            <button tpye="button" class="modal-close">
                <img src="./assets/front/images/icons/close_bc.png" alt="">
            </button>
        </div>
        <div class="content">
            이용약관 내용
        </div>
    </div>
</div>

<!--개인정보처리방침 모달-->
<div class="modal terms2">
    <div class="terms-box">
        <div class="tit-box">
            <span>개인정보처리방침</span>
            <button tpye="button" class="modal-close">
                <img src="./assets/front/images/icons/close_bc.png" alt="">
            </button>
        </div>
        <div class="content">
            개인정보처리방침 내용
        </div>
    </div>
</div>





<script>

    //헤더 스크롤 그림자
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('.header-wrap').addClass("down");
        } else {
            $('.header-wrap').removeClass("down");
        }
    });
    //모바일 헤더 스크롤 그림자
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('.m-header-wrap').addClass("down");
        } else {
            $('.m-header-wrap').removeClass("down");
        }
    });
    //이용약관 모달
    $(".terms-btn1").click(function(){
        $(".terms1").show();
    });
    //개인정보처리방침 모달
    $(".terms-btn2").click(function(){
        $(".terms2").show();
    });
    $(".modal-close").click(function(){
        $(".modal").hide();
    });
    //메인 슬라이드
    $(document).ready(function() {
        $('.main-slick').slick({
            centerMode: true,
            centerPadding:'0',
            variableWidth: false,
            dots: false,
            arrow: false,
            infinite: true,
            autoplay: false,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow : $('.prev-arrow'), 
            nextArrow : $('.next-arrow'), 
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    variableWidth: false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    variableWidth: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                }
                },
                {
                breakpoint: 480,
                settings: {
                    variableWidth: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                }
                },
            ]
        });
    });
</script>


<?php
    include('header.php');
?>

<main>
    <section>
        <div class="wrap">
            <div class="main-hd">
                <div class="tit-box">
                    <p class="sml-tit">SEOUL RUNNER</p>
                    <div class="big-tit">
                    서울의 다양한 러닝코스, 이제 쉽게 찾아보고 경험하세요.
                    </div>
                </div>
                <div class="map">
                    <?php
                        include('seoul_map.php');
                    ?>
                    <p>원하시는 지역을 선택해주세요. <img src="./assets/front/images/icons/click.svg" alt=""></p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-box">
            <div class="wrap">
                <p class="big-tit">러닝 관련 정보</p>
                <p class="sml-tit">다양한 정보를 통해 안전하고 건강한 러닝 생활을 즐기세요.</p>
                
                <div class="slider-box">
                    <div class="main-slick">
                        <div>
                            <a href="https://terms.naver.com/entry.naver?docId=939085&cid=51036&categoryId=51036" target="_blank">
                                <div class="img-box">
                                    <!--썸네일이 없을 경우-->
                                    <!--img src="./assets/front/images/logo/seoul_runners_logo.png" alt="" class="empty-img"-->

                                    <img src="./assets/front/images/temp/running_info_temp_1.jpg" alt="">
                                    <div class="box">
                                        <div class="line">
                                            <span>
                                                보러가기
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="date">23. 11. 30</p>
                                <p class="tit">운동 주기의 중요성</p>
                            </a>
                        </div>

                        <div>
                            <a href="https://terms.naver.com/entry.naver?docId=939085&cid=51036&categoryId=51036" target="_blank">
                                <div class="img-box">
                                    <!--썸네일이 없을 경우-->
                                    <!--img src="./assets/front/images/logo/seoul_runners_logo.png" alt="" class="empty-img"-->

                                    <img src="./assets/front/images/temp/running_info_temp_2.jpg" alt="">
                                    <div class="box">
                                        <div class="line">
                                            <span>
                                                보러가기
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="date">23. 11. 28</p>
                                <p class="tit">건강한 운동 지식</p>
                            </a>
                        </div>

                        <div>
                            <a href="https://terms.naver.com/entry.naver?docId=939085&cid=51036&categoryId=51036" target="_blank">
                                <div class="img-box">
                                    <!--썸네일이 없을 경우-->
                                    <!--img src="./assets/front/images/logo/seoul_runners_logo.png" alt="" class="empty-img"-->

                                    <img src="./assets/front/images/temp/running_info_temp_3.jpg" alt="">
                                    <div class="box">
                                        <div class="line">
                                            <span>
                                                보러가기
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="date">23. 11. 26</p>
                                <p class="tit">올바른 러닝 생활을 위한 필수적인 해결책필수적인 해결책</p>
                            </a>
                        </div>

                        <div>
                            <a href="https://terms.naver.com/entry.naver?docId=939085&cid=51036&categoryId=51036" target="_blank">
                                <div class="img-box">
                                    <!--썸네일이 없을 경우-->
                                    <!--img src="./assets/front/images/logo/seoul_runners_logo.png" alt="" class="empty-img"-->

                                    <img src="./assets/front/images/temp/running_info_temp_4.jpg" alt="">
                                    <div class="box">
                                        <div class="line">
                                            <span>
                                                보러가기
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="date">23. 11. 30</p>
                                <p class="tit">러닝 코스 추천</p>
                            </a>
                        </div>
                    </div>

                    <!--슬라이더 버튼-->
                    <div class="arrow-box">
                        <span class="prev-arrow"><img src="./assets/front/images/icons/arrow_left.svg" alt=""></span>
                        <span class="next-arrow"><img src="./assets/front/images/icons/arrow_right.svg" alt=""></span>  
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</main>

<?php
    include('footer.php');
?>

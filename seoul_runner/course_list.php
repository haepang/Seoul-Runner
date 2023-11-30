
<?php
    include('header.php');
?>

<main>
    <section>
        <div class="wrap">
            <div class="page-tit">
                <span class="tit">노원구</span>
                <div class="category-box">
                    <button type="button" class="on">전체</button>
                    <button type="button" class="">공원</button>
                    <button type="button" class="">트랙</button>
                    <button type="button" class="">장거리</button>
                </div>
            </div>

            <ul class="item-list">

                <!--등록된 글이 없을 경우-->
                <!--li class="empty">등록된 코스가 없습니다.</li-->

                <li>
                    <a href="course_view.php">
                        <div class="item-tit"><b>1.</b>서울과기대 육상트랙 (트랙)</div>
                        <div class="item-bd">
                            <div class="img-box">
                                <!--썸네일이 없을 경우-->
                                <!--img src="./assets/front/images/logo/seoul_runners_logo.png" alt="" class="empty-img"-->
                                <img src="./assets/front/images/common/nowon_1.png" alt="">
                                <div class="box">
                                    <div class="line">
                                        <span>보러가기</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="hd">
                                    <p>사용 가능 시간</p>
                                    <p>06시 ~ 22시</p>
                                </div>
                                <div class="ft">
                                    <p>코스 설명</p>
                                    <div>한 바퀴에 400m로 트랙이 국제구격의 트랙으로 되어 있어서, 다양한 종류의 달리기 훈련을 하기 좋다.한 바퀴에 400m로 트랙이 국제구격의 트랙으로 되어 있어서, 다양한 종류의 달리기 훈련을 하기 좋다.한 바퀴에 400m로 트랙이 국제구격의 트랙으로 되어 있어서, 다양한 종류의 달리기 훈련을 하기 좋다.</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="course_view.php">
                        <div class="item-tit"><b>2.</b>서울과기대 육상트랙 (트랙)</div>
                        <div class="item-bd">
                            <div class="img-box">
                                <!--썸네일이 없을 경우-->
                                <!--img src="./assets/front/images/logo/seoul_runners_logo.png" alt="" class="empty-img"-->
                                <img src="./assets/front/images/common/nowon_2.png" alt="">
                                <div class="box">
                                    <div class="line">
                                        <span>보러가기</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="hd">
                                    <p>사용 가능 시간</p>
                                    <p>제한 없음</p>
                                </div>
                                <div class="ft">
                                    <p>코스 설명</p>
                                    <div>최근에 3km 정도가 연장이 돼서 총 6km의 길이의 코스로, 예전의 철길을 개조해서 공원으로 만든 것이기 때문에 코스가 매우 이쁘다.</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                
                
            </ul>

            <!--페이지네이션-->
            <div class="pagination">
                <ul>
                    <li class="prev">
                        <a href=""><img src="./assets/front/images/icons/pagination_prev.png" alt=""></a>
                    </li>
                    <li class="on">
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="">2</a>
                    </li>
                    <li>
                        <a href="">3</a>
                    </li>
                    <li>
                        <a href="">4</a>
                    </li>
                    <li>
                        <a href="">5</a>
                    </li>
                    <li>
                        <a href="">6</a>
                    </li>
                    <li>
                        <a href="">7</a>
                    </li>
                    <li>
                        <a href="">8</a>
                    </li>
                    <li>
                        <a href="">9</a>
                    </li>
                    <li>
                        <a href="">10</a>
                    </li>
                    <li class="next">
                        <a href=""><img src="./assets/front/images/icons/pagination_next.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
    include('footer.php');
?>

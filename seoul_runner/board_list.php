
<?php
    include('header.php');
?>

<main>
    <section>
        <div class="wrap">
            <div class="page-tit">
                <span class="tit">질문게시판</span>
            </div>

            <div class="list-head">
                <span class="num">번호</span>
                <span class="tit">제목</span>
                <span class="writer">작성자</span>
                <span class="date">작성일</span>
                <span class="reply">답변</span>
            </div>

            <ul class="board-list">
                
                <!--등록된 글이 없을 경우-->
                <!--li class="empty">등록된 글이 없습니다.</li-->

                <li>
                    <a href="board_view.php">
                        <span class="num">9</span>
                        <span class="tit">구로구에 코스 추천드려도 될까요?</span>
                        <span class="writer">구름</span>
                        <span class="date">14:12</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply no">미답변</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">8</span>
                        <span class="tit">관악구에 코스 추천드려도 될까요?</span>
                        <span class="writer">겨울</span>
                        <span class="date">14:52</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">7</span>
                        <span class="tit">중구에 코스 추천드려도 될까요?</span>
                        <span class="writer">새싹</span>
                        <span class="date">15:27</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">6</span>
                        <span class="tit">강서구에 코스 추천드려도 될까요?</span>
                        <span class="writer">유치원</span>
                        <span class="date">16:04</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">5</span>
                        <span class="tit">코스는 계속 추가 될 예정인가요? 궁금합니다.</span>
                        <span class="writer">서울시민</span>
                        <span class="date">17:32</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">4</span>
                        <span class="tit">노원구에 코스 추천드려도 될까요?</span>
                        <span class="writer">노원구민</span>
                        <span class="date">11-28</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">3</span>
                        <span class="tit">강남구에 코스 추천드려도 될까요?</span>
                        <span class="writer">호랑이</span>
                        <span class="date">11-27</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">2</span>
                        <span class="tit">동대문구에 코스 추천드려도 될까요?</span>
                        <span class="writer">토끼</span>
                        <span class="date">11-26</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
                    </a>
                </li>

                <li>
                    <a href="board_view.php">
                        <span class="num">1</span>
                        <span class="tit">은평구에 코스 추천드려도 될까요?</span>
                        <span class="writer">사자</span>
                        <span class="date">11-25</span>
                        <!--yes 답변 / no 미답변-->
                        <span class="reply yes">답변완료</span>
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

                <button type="button" class="btn bc-btn" onclick="location.href='board_write.php'">작성</button>
            </div>
        </div>
    </section>
</main>

<?php
    include('footer.php');
?>

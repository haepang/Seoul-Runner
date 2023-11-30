
<?php
    include('header.php');
?>

<main>
    <section>
        <div class="wrap">
            <div class="page-tit">
                <span class="tit">질문게시판</span>
            </div>

            <div class="bview-box">
                <div class="hd">
                    <span class="sml-tit">제목</span>
                    <div class="writer-box">
                        <span class="gc-tit">작성자</span>
                        <span class="bc-tit">서울시민</span>
                        <span class="between"></span>
                        <span class="gc-tit">작성일</span>
                        <span class="bc-tit">17:32</span>
                    </div>
                </div>
                <div class="big-tit">
                    코스는 계속 추가 될 예정인가요?
                </div>
                <div class="content">서울 러너를 통해서 몰랐던 코스들을 많이 알아가고 있습니다.
                    
                추후에도 러닝 코스들이 계속 업데이트 될 예정인지 궁금합니다.
                </div>
            </div>

            <!--답변이 없을 경우-->
            <!--div class="reply-box">
                <div class="hd">
                    <span class="sml-tit no">미답변</span>
                </div>
                
                <div class="content">
                    아직 답변이 등록되지 않았습니다. 빠른 시간내에 답변드리겠습니다.
                </div>
            </div-->

            <div class="reply-box">
                <div class="hd">
                    <span class="sml-tit yes">답변완료</span>
                    <div class="writer-box">
                        <span class="gc-tit">작성자</span>
                        <span class="bc-tit mc">SEOUL RUNNER</span>
                        <span class="between"></span>
                        <span class="gc-tit">작성일</span>
                        <span class="bc-tit">19:15</span>
                    </div>
                </div>
                
                <div class="content">
                    안녕하세요. 서울러너를 이용해 주셔서 감사합니다. 말씀하신대로 서울러너는 계속 업데이트 될 예정입니다.
                </div>
            </div>

            <div class="btn-wrap">
                <button type="button" class="btn bc-btn" onclick="history.back();">목록으로</button>
            </div>
        </div>
    </section>
</main>

<?php
    include('footer.php');
?>

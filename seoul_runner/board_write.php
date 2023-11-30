
<?php
    include('header.php');
?>

<main>
    <section>
        <div class="wrap">
            <div class="page-tit">
                <span class="tit">질문게시판</span>
            </div>

            <div class="board-box">
                <p>제목</p>
                <input type="text" placeholder="제목을 입력해주세요.">
                <p>내용</p>
                <textarea placeholder="내용을 입력해주세요."></textarea>
            </div>

            <div class="btn-wrap">
                <button type="button" class="btn bc-btn" onclick="history.back();">목록으로</button>
                <button type="button" class="btn mc-btn cf-btn" onclick="location.href='board_view.php'">작성</button>
            </div>
        </div>
    </section>
</main>

<?php
    include('footer.php');
?>

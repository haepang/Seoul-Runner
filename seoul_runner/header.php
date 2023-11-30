<html lang="kr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--fav-->
    <link rel="shortcut icon" href="./assets/front/images/logo/favicon.png">
    <!--fav-->

    <link type="text/css" rel="stylesheet" href="./assets/front/css/jquery-ui.css" />
    <link type="text/css" rel="stylesheet" href="./assets/front/css/slick-theme.css" />
    <link type="text/css" rel="stylesheet" href="./assets/front/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="./assets/front/css/reset.css" />
    <link type="text/css" rel="stylesheet" href="./assets/front/css/common.css" />
    <link type="text/css" rel="stylesheet" href="./assets/front/css/fonts.css" />

    <link type="text/css" rel="stylesheet" href="./assets/front/css/layout.css?ver=<?php echo time()?>" />
    <link type="text/css" rel="stylesheet" href="./assets/front/css/responsive.css?ver=<?php echo time()?>" />
    
    <script type="text/javascript" src="./assets/front/js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="./assets/front/js/slick.js"></script>

    <title>SEOUL RUNNER</title>
  </head>
  <body>
	<header>
		<div class="header-wrap">
			<div class="wrap">
				<a href="index.php" class="logo">
					<img src="./assets/front/images/logo/seoul_runners_logo.png" alt="">
					SEOUL RUNNER
				</a>
				<div class="gnb">
					<a href="about.php">소개</a>
					<a href="board_list.php">질문게시판</a>
          <span class="between"></span>
					<a href="login.php" class="mc-box">로그인</a>
				</div>

        <!--로그인 후-->
        <!--div class="gnb">
					<a href="about.php">소개</a>
					<a href="board_list.php">질문게시판</a>
          <span class="between"></span>
          <span>호랑이님</span>
					<a href="index.php" class="mc-box">로그아웃</a>
				</div-->
			</div>
		</div>

    <!--모바일 헤더-->
    <div class="m-header-wrap">
      <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="./assets/front/images/logo/seoul_runners_logo.png" alt="">
                SEOUL RUNNER
            </a>
        </div>
        <button type="button" class="m-gnb">
            <img src="./assets/front/images/icons/ham.svg" alt="">
        </button>

        <div class="toggle-box">
          <div class="hd">
            <div class="logo">
              <a href="index.php">
                  <img src="./assets/front/images/logo/seoul_runners_logo.png" alt="">
                  SEOUL RUNNER
              </a>
            </div>
            <button type="button" class="m-gnb m-close">
              <img src="./assets/front/images/icons/close.svg">
            </button>
          </div>
          <div class="bd">
              <!--로그인전-->
              <a href="login.php" class="btn login">로그인 하러가기</a>

              <!--로그인후-->
              <!--p>지리산반달곰</p>
              <a href="index.php" class="btn login">로그아웃</a-->

              <ul>
                <li>
                  <a href="about.php">소개</a>
                </li>
                <li>
                  <a href="board_list.php">질문게시판</a>
                </li>
              </ul>
          </div>
          <div class="ft">
            COPYRIGHT 2023. <b>SEOUL RUNNER</b> ALL RIGHTS RESERVED.
          </div>
        </div>
      </div>
    </div>
	</header>

  <script>
    $('.toggle-box').css('display', 'none');
      if ($(".toggle-box").css("display") == "none") {
        $(".m-gnb").click(function() {
            if ($(".toggle-box").css("display") == "none") {
              $('body').css({
                  "overflow": "hidden"
              });
              $(".toggle-box").slideToggle(300);
          } else {
              $('body').css({
                  "overflow": "auto"
              });
              $(".toggle-box").slideToggle(300);
          }
        });
      }
  </script>
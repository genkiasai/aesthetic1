<?php
    try {
        session_start();
        require("./dbconnect.php");
        require("./CCommon.php");

    } catch (Exception $e) {
        echo "エラー：" . $e;
    }
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css?ver=1.4">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@TODO</title>
</head>
<body>
    <header id="scroll-top">
        <!-- 会社名 -->
        <nav class="nav-pc">
            <div class="row">
                <div class="col-xl-4 col-sm-4 header__contents header__contents-1"><a class="header header__company-name" href="./">@TODO店名</a></div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a class="header header__menu header__menu-1" href="./">
                        <div class="header__menu-1-1">HOME</div>
                        <div class="header__menu-1-2">ホーム</div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a class="header header__menu header__menu-1" href="#scroll-3">
                        <div class="header__menu-2-1">THERAPIST</div>
                        <div class="header__menu-2-2">セラピスト</div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a class="header header__menu header__menu-1" href="#scroll-5">
                        <div class="header__menu-3-1">MENU</div>
                        <div class="header__menu-3-2">メニュー</div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a href="#scroll-6" class="header header__menu header__menu-1">
                        <div class="header__menu-4-1">ACCESS</div>
                        <div class="header__menu-4-2">アクセス</div>
                    </a>
                </div>
            </div>
        </nav>
        
        <nav class="navbar navbar-expand-lg navbar-light nav-mobile">
            <div class="toggle">
                    <a class="navbar-brand" href="#scroll-1">
                        <div class="nav__logo-area_sp">
                            <!-- <div class="nav__logo-item col-4 px-0"><img src="./images/logo.webp" alt="ロゴ"></div> -->
                            <div class="nav__logo-name"><span class="nav__logo-name_bold">@TODO店名</span></div>
                        </div>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            </div>
            <div class="menu-list">
                    <div class="navbar-collapse collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#scroll-top">ホーム</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#scroll-3">セラピスト</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#scroll-5">メニュー</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#scroll-6">アクセス</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    
    <main>
        <!-- wrapper-1 -->
        <div class="wrapper wrapper-1" id="scroll-1">
            <div class="inner inner-1">
                <h2 class="wrapper__h1">セラピスト</h2>
            </div>
        </div>
        <!-- /wrapper-1 -->
    </main>

    <footer>
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('a[href^="#"]').click(function(){
                let speed = 1000;
                let href= $(this).attr("href");
                let target = $(href == "#" || href == "" ? 'html' : href);
                let position = target.offset().top;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
            });
        });
    </script>
</body>
</html>
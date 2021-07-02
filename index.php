<?php
    try {
        session_start();
        require("./dbconnect.php");
        require("./CCommon.php");
    
        $tops = $db->prepare("SELECT * FROM top_page WHERE id=(SELECT MAX(id) FROM top_page)");
        $tops->execute();
        $top = $tops->fetch(PDO::FETCH_ASSOC);
    
        // インフォメーションの読み込み
        $infos = $db->prepare("SELECT * FROM top_info ORDER BY id DESC");
        $infos->execute();
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
                    <a class="header header__menu header__menu-1" href="#scroll-top">
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
                    <div class="navbar-collapse collapse" id="navbarNav" style="">
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
            <h1 class="wrapper-1__catch-copy"><?php echo h($top["catch_copy"]); ?></h1>
        </div>
        <!-- /wrapper-1 -->

        <!-- wrapper-2 -->
        <div class="wrapper wrapper-2">
            <div class="inner inner-2">
                <h2 class="wrapper__h2">インフォメーション</h2>
                <div class="info-area">
                    <?php foreach ($infos as $info): ?>
                        <div class="info info-<?php h($info["id"]); ?>">
                            <div class="info-data date date-<?php echo h($info["id"]); ?>"><?php echo h($info["year"]) . "/" . h($info["month"]) . "/" . h($info["day"]); ?></div>
                            <div class="info-data sentence sentence-<?php echo h($info["id"]); ?>"><?php echo h($info["info"]); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- /wrapper-2 -->

        <!-- wrapper-3 -->
        <div class="wrapper wrapper-3" id="scroll-3">
            <div class="inner inner-3">
                <h2 class="wrapper__h2">セラピスト</h2>
                <div class="images-area images-area-1">
                    <!-- <div class="arrow-area arrow-area-1"><a href="./"><img class="arrow-previous" src="./images/arrow-previous.png" alt=""></a></div> -->
                    <div class="image-area image-area-1"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <div class="image-area image-area-2"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <div class="image-area image-area-3"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <div class="image-area image-area-4"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <!-- <div class="arrow-area arrow-area-2"><a href="./"><img class="arrow-previous" src="./images/arrow-next.png" alt=""></a></div> -->
                <!-- </div>
                <div class="images-area images-area-2"> -->
                    <!-- <div class="arrow-area arrow-area-1"><a href="./"><img class="arrow-previous" src="./images/arrow-previous.png" alt=""></a></div> -->
                    <div class="image-area image-area-5"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <div class="image-area image-area-6"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <div class="image-area image-area-7"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <div class="image-area image-area-8"><a class="therapist" href="./"><img class="image" src="./images/genki.png" alt=""><div class="intro intro-1"><p class="no-margin">自己紹介</p><p class="no-margin">自己紹介</p></div></a></div>
                    <!-- <div class="arrow-area arrow-area-2"><a href="./"><img class="arrow-previous" src="./images/arrow-next.png" alt=""></a></div> -->
                </div>
                <a class="view-more" href="./">View More</a>
            </div>
        </div>
        <!-- /wrapper-3 -->

        <!-- wrapper-4 -->
        <div class="wrapper wrapper-4">
            <div class="inner inner-4">
                <div class="message-area">
                    <div class="message message-1"><?php echo h($top["message_1"]); ?></div>
                    <div class="message message-2"><?php echo h($top["message_2"]); ?></div>
                    <div class="message message-3"><?php echo h($top["message_3"]); ?></div>
                </div>
            </div>
        </div>
        <!-- /wrapper-4 -->

        <!-- wrapper-5 -->
        <div class="wrapper wrapper-5" id="scroll-5">
            <div class="inner inner-5">
                <div class="menu">
                    <h2 class="wrapper__h2">メニュー</h2>
                </div>
            </div>
        </div>
        <!-- /wrapper-5 -->

        <!-- wrapper-6 -->
        <div class="wrapper wrapper-6" id="scroll-6">
            <div class="inner inner-6">
                <h2 class="wrapper__h2">アクセス</h2>
                <div class="access-area">
                    <div class="access access-1">
                        <div class="access-item access-address address">場所</div>
                        <div class="access-address sentence sentence-address"><?php echo h($top["address"]); ?></div>
                    </div>
                    <div class="access access-2">
                        <div class="access-item access-tel tel">TEL</div>
                        <div class="access-tel sentence sentence-tel"><?php echo h($top["tel"]); ?></div>
                    </div>
                    <div class="access access-3">
                        <div class="access-item access-time time">営業時間</div>
                        <div class="access-time sentence sentence-time"><?php echo h($top["time"]); ?></div>
                    </div>
                    <div class="access access-4">
                        <div class="access-item access-holiday holiday">定休日</div>
                        <div class="access-holiday sentence sentence-holiday"><?php echo h($top["holiday"]); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /wrapper-6 -->

        <!-- wrapper-7 -->
        <div class="wrapper wrapper-7">
            <div class="inner inner-7">
                <div class="caution">
                    ▼△▼注意事項▼△▼<br>
                    セラピストの引き抜き行為、スカウトは罰金50万円とします。<br>
                    当店は本格的なアロマセラピーをご提供するサロンであり、風俗的サービスは一切行っておりません。<br>
                    施術中にそのようなサービスの要求、品性の無い発言・行動をされた場合またはセラピストが施術続行不可能と判断した場合には、直ちに施術を中止し、ご退店をしていただく事が御座います。<br>
                    その際の料金の返金は一切いたしませんので予めご了承ください。<br>
                    <br>
                    また、下記項目に該当する方の、当店のご利用は控えさせていただいております。<br>
                    予めご了承いただきますようお願い申し上げます。<br>
                    ・風邪などで発熱のある方<br>
                    ・泥酔状態の方<br>
                    ・重度の皮膚疾患がある方（皮膚炎・水虫など）<br>
                    ・セラピストの体に触るなど性的なサービスの要求、暴言・セラピストの嫌がる行為をされる方<br>
                    ・スカウトや引き抜き行為をされる方<br>
                    ・盗撮、盗聴などの行為をする方<br>
                    ・暴力団関係者又はそれに準ずる方、刺青・タトゥーのある方<br>
                    ・当店運営、営業に支障をきたす方<br>
                    ・当店の趣旨をご理解頂けない方、当店がふさわしくないと判断した方<br>
                    ・これらの事は、当サロンを快適・安全にご利用いただくために必要な事ですので、何卒ご理解の程をお願い申し上げます。また、施術中に発覚した場合は施術中でもサービス終了、即退店して頂きます。<br>
                    ・その場合、料金の返金は一切いたしませんので、予めご了承いただけますようお願い申し上げます。<br>
                    ・当店は「医療法」が定める「病院、診療所、治療院」や、あん摩、マッサージ指圧師、鍼灸師等が定める施術所では御座いません。
                </div>
            </div>
        </div>
        <!-- /wrapper-7 -->
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
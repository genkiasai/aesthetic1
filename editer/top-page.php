<?php
    session_start();
    require("../dbconnect.php");

    // キャッチコピー
    if (isset($_POST["catch_copy"])) {
        $catch_copy = $_POST["catch_copy"];
    }
    
    // メッセージ１
    if (isset($_POST["message_1"])) {
        $message_1 = $_POST["message_1"];
    }
    
    // メッセージ２
    if (isset($_POST["message_2"])) {
        $message_2 = $_POST["message_2"];
    }
    
    // メッセージ３
    if (isset($_POST["message_3"])) {
        $message_3 = $_POST["message_3"];
    }
    
    // 住所
    if (isset($_POST["address"])) {
        $address = $_POST["address"];
    }
    
    // 電話番号
    if (isset($_POST["tel"])) {
        $tel = $_POST["tel"];
    }
    
    // 営業時間
    if (isset($_POST["time"])) {
        $time = $_POST["time"];
    }
    
    // 定休日
    if (isset($_POST["holiday"])) {
        $holiday = $_POST["holiday"];
    }

    echo $catch_copy;
    echo $message_1;
    echo $message_2;
    echo $message_3;
    echo $address;
    echo $tel;
    echo $time;
    echo $holiday;
    


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
                            <a class="nav-link" href="#scroll-top">セラピスト登録</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scroll-3">セラピスト編集</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scroll-5">出勤ステータス</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./top-page.php">トップページ編集</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="main__top-page">
        <form action="" method="POST">
            <div class="wrapper wrapper-1">
                <div class="inner inner-1">
                    <h2 class="wrapper__h2">キャッチコピー</h2>
                    <input class="text text__catch-copy" id="catch_copy" type="text" name="catch_copy" placeholder="キャッチコピー">
                </div>
            </div>

            <div class="wrapper wrapper-2">
                <div class="inner inner-2">
                    <h2 class="wrapper__h2">インフォメーション</h2>
                    <div class="info-area-1">
                        <div class="info-area-1-1">
                            <div class="info__date">
                                <select name="info__date-year" id="">
                                    <option value="0"></option>
                                    <option value="1">2021</option>
                                </select>
                                年
                                <select name="info__date-month" id="">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                月
                                <select name="info__date-day" id="">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                日
                            </div>
                        </div>
                        <div class="info-area-1-2">
                            <input class="text text__info" id="text__info" type="text" name="text__info" placeholder="インフォメーション">
                        </div>
                    </div>
                    <div class="info-area-2">
                        <div class="info-inner">
                            <div class="now-info info-1">
                                <div class="info-data date date-1">2021/6/15</div>
                                <div class="info-data sentence-button">
                                    <div class="sentence sentence-1">Webサイトが完成しました！</div>
                                    <input class="submit submit__info_delete" id="submit__info_delete-1" name="submit__info_delete-1" type="submit" value="削除">
                                </div>
                            </div>
                            <div class="now-info info-1">
                                <div class="info-data date date-1">2021/6/15</div>
                                <div class="info-data sentence-button">
                                    <div class="sentence sentence-1">Webサイトが完成しました！</div>
                                    <input class="submit submit__info_delete" id="submit__info_delete-1" name="submit__info_delete-1" type="submit" value="削除">
                                </div>
                            </div>
                            <div class="now-info info-1">
                                <div class="info-data date date-1">2021/6/15</div>
                                <div class="info-data sentence-button">
                                    <div class="sentence sentence-1">Webサイトが完成しました！</div>
                                    <input class="submit submit__info_delete" id="submit__info_delete-1" name="submit__info_delete-1" type="submit" value="削除">
                                </div>
                            </div>
                            <div class="now-info info-1">
                                <div class="info-data date date-1">2021/6/15</div>
                                <div class="info-data sentence-button">
                                    <div class="sentence sentence-1">Webサイトが完成しました！</div>
                                    <input class="submit submit__info_delete" id="submit__info_delete-1" name="submit__info_delete-1" type="submit" value="削除">
                                </div>
                            </div>
                            <div class="now-info info-1">
                                <div class="info-data date date-1">2021/6/15</div>
                                <div class="info-data sentence-button">
                                    <div class="sentence sentence-1">Webサイトが完成しました！</div>
                                    <input class="submit submit__info_delete" id="submit__info_delete-1" name="submit__info_delete-1" type="submit" value="削除">
                                </div>
                            </div>
                            <div class="now-info info-1">
                                <div class="info-data date date-1">2021/6/15</div>
                                <div class="info-data sentence-button">
                                    <div class="sentence sentence-1">Webサイトが完成しました！</div>
                                    <input class="submit submit__info_delete" id="submit__info_delete-1" name="submit__info_delete-1" type="submit" value="削除">
                                </div>
                            </div>
                            <div class="now-info info-1">
                                <div class="info-data date date-1">2021/6/15</div>
                                <div class="info-data sentence-button">
                                    <div class="sentence sentence-1">Webサイトが完成しました！</div>
                                    <input class="submit submit__info_delete" id="submit__info_delete-1" name="submit__info_delete-1" type="submit" value="削除">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-3">
                <div class="inner inner-3">
                    <h2 class="wrapper__h2">メッセージ</h2>
                    <textarea class="textarea textarea__message" id="textarea__message-1" name="message_1" cols="30" rows="10"></textarea>
                    <textarea class="textarea textarea__message" id="textarea__message-2" name="message_2" cols="30" rows="10"></textarea>
                    <textarea class="textarea textarea__message" id="textarea__message-3" name="message_3" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="wrapper wrapper-4">
                <div class="inner inner-4">
                    <h2 class="wrapper__h2">アクセス</h2>
                    <div class="accsess__item">
                        <div class="access__item-name">住所</div>
                        <input class="text text__access text__access_address" id="text__access_address" name="address" type="text">
                    </div>
                    <div class="accsess__item">
                        <div class="access__item-name">TEL</div>
                        <input class="text text__access text__access_tel" id="text__access_tel" name="tel" type="text">
                    </div>
                    <div class="accsess__item">
                        <div class="access__item-name">営業時間</div>
                        <input class="text text__access text__access_time" id="text__access_time" name="time" type="text">
                    </div>
                    <div class="accsess__item">
                        <div class="access__item-name">定休日</div>
                        <input class="text text__access text__access_holiday" id="text__access_holiday" name="holiday" type="text">
                    </div>
                </div>
            </div>

            <div class="save-area">
                <div class="save-message">
                    編集が終了したら→
                </div>
                <input class="submit__save" id="submit__save" name="submit__save" type="submit" value="保存">
            </div>
        </form>
    </main>



    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
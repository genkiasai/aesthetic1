<?php
    try {
        session_start();
        require("../dbconnect.php");
        require("../CCommon.php");

        // 入力確認
        if (isset($_POST["save"])) {
            $post = inputCheck($_POST);
        }

        // データベース書き込み（インフォメーション以外）
        if (!isset($post["error"]) && isset($_POST["save"])) {
            $write = $db->prepare("INSERT INTO top_page SET catch_copy=?, message_1=?, message_2=?, message_3=?, address=?, tel=?, time=?, holiday=?");
            $write->execute(array(
                $post["catch_copy"],
                $post["message_1"],
                $post["message_2"],
                $post["message_3"],
                $post["address"],
                $post["tel"],
                $post["time"],
                $post["holiday"]
            ));
        }

        // データベース書き込み（インフォメーション）
        if (!isset($post["error_info"]) && isset($_POST["save"])) {
            $write = $db->prepare("INSERT INTO top_info SET year=?, month=?, day=?, info=?");
            $write->execute(array(
                $post["year"],
                $post["month"],
                $post["day"],
                $post["info"]
            ));
        }
        
        // 削除ボタン押下時
        if (isset($_GET["delete"])) {
            $delete = $db->prepare("DELETE FROM top_info WHERE id=?");
            $delete->execute(array(
                $_GET["delete"]
            ));
        }

        // データベース読み込み（インフォメーション以外）
        // $exports = $db->prepare("SELECT * FROM top_page WHERE id=(SELECT MAX(id) FROM top_page)");
        // $exports->execute();
        // $export = $exports->fetch(PDO::FETCH_ASSOC);
        // $export_infos = $db->prepare("SELECT * FROM top_info ORDER BY id DESC");
        // $export_infos->execute();
        // $export_info = $export_infos->fetch(PDO::FETCH_ASSOC);

        // データベース読み込み（インフォメーション）
        // $infos = $db->prepare("SELECT * FROM top_info ORDER BY id DESC");
        // $infos->execute();
        
    } catch (Exception $e) {
        echo "エラー：" . $e->getMessage();
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <link rel="stylesheet" href="./style.css?ver=1.3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <title>@TODO</title>

    <!-- https://github.com/yuki-yoshida-z/demoes/blob/master/trimming.html参照 -->
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no"> -->
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <!-- <link rel="stylesheet" href="css/base/reset.css" type="text/css">
    <link rel="stylesheet" href="css/base/layout.css" type="text/css"> -->
    <link rel="stylesheet" href="css/vendor/cropper.css" type="text/css">
    <!-- <link rel="stylesheet" href="css/vendor/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/page/trimming.css" type="text/css"> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</head>
<body>
    <header id="scroll-top">
        <!-- 会社名 -->
        <nav class="nav-pc">
            <div class="row">
                <div class="col-xl-4 col-sm-4 header__contents header__contents-1"><a class="header header__company-name" href="./">@TODO店名</a></div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a class="header header__menu header__menu-1" href="./record-therapist.php">
                        <div class="header__menu-1-1">RECORD</div>
                        <div class="header__menu-1-2">セラピスト登録</div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a class="header header__menu header__menu-1" href="#scroll-3">
                        <div class="header__menu-2-1">EDIT</div>
                        <div class="header__menu-2-2">セラピスト編集</div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a class="header header__menu header__menu-1" href="./edit-status.php">
                        <div class="header__menu-3-1">WORK</div>
                        <div class="header__menu-3-2">出勤ステータス</div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-2 header__contents header__contents-2">
                    <a href="./edit-top.php" class="header header__menu header__menu-1">
                        <div class="header__menu-4-1">TOP-PAGE</div>
                        <div class="header__menu-4-2">トップページ編集</div>
                    </a>
                </div>
            </div>
        </nav>
        
        <nav class="navbar navbar-expand-lg navbar-light nav-mobile">
            <div class="toggle">
                    <a class="navbar-brand" href="#scroll-1">
                        <div class="nav__logo-area_sp">
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
                            <a class="nav-link" href="./record-therapist.php">セラピスト登録</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scroll-3">セラピスト編集</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./edit-status.php">出勤ステータス</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./edit-top.php">トップページ編集</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="main__top-page">
        <h1 class="edit__h1">出勤ステータス編集画面</h1>
        <form action="" method="POST">
            <div class="wrapper wrapper-1">
                <div class="inner inner-1">
                    <div class="item item-1">
                        <div class="item-name">名前</div>
                        <div class="input-area"><input class="name text__record-therapist" id="name" name="name" type="text" placeholder="名前"></div>
                    </div>
                    
                    <div class="item item-2">
                        <div class="item-name">誕生日（実年齢で使用）</div>
                        <div class="input-area"><input class="age real_age date__record-therapist" id="real_age" name="real_age" type="date"></div>
                    </div>
                    
                    <div class="item item-3">
                        <div class="item-name">誕生日（表示年齢で使用）</div>
                        <div class="input-area"><input class="age false_age date__record-therapist" id="false_age" name="false_age" type="date"></div>
                    </div>
                    
                    <div class="item item-4">
                        <div class="item-name">趣味</div>
                        <div class="input-area"><input class="hobby text__record-therapist" id="hobby" name="hobby[]" type="text"></div>
                        <div class="add add__hobby">追加</div>
                    </div>
                    
                    <div class="item item-5">
                        <div class="item-name">休日の過ごし方</div>
                        <div class="input-area"><input class="spend text__record-therapist" id="spend" name="spend[]" type="text"></div>
                        <div class="add add__spend">追加</div>
                    </div>

                    <div class="item item-6">
                        <div class="item-name">写真</div>
                        <div class="input-area">
                            <input class="image text__record-therapist js-imageFile" id="image-file" name="image[]" type="file" accept="image/*">
                        </div>
                    </div>

                    <img class="js-trimmedImg" id="preview" src="" alt="">
                    







<!-- Button trigger modal -->
<button type="button" class="btn btn-primary modal-btn" data-bs-toggle="modal" data-bs-target="#myModal" style="display:none">
</button>



<div class="modal fade js-trimmingModal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">トリミンングしてください</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="trimming-area">
            <img src="" class="js-preaviewImage js-trimmingAreaImg">
          <!-- /.trimming-area --></div>
        <!-- /.modal-body --></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger js-trimmingBtn" data-option="">これで決定</button>
        </div>
      <!-- /.modal-content --></div>
    <!-- /.modal-dialog --></div>
  <!-- /.modal --></div>













                    <!-- 追加要素 -->
                    <div class="item item__hobby" style="display: none;">
                        <div class="item-name"></div>
                        <div class="input-area"><input class="hobby text__record-therapist" id="hobby-" name="hobby[]" type="text"></div>
                        <div class="dummy"></div>
                    </div>
                    
                    <div class="item item__spend" style="display: none;">
                        <div class="item-name"></div>
                        <div class="input-area"><input class="spend text__record-therapist" id="spend-" name="spend[]" type="text"></div>
                        <div class="dummy"></div>
                    </div>



                </div>
            </div>
            <div class="save-area">
                        <div class="save-message">
                            編集が終了したら→
                        </div>
                        <input class="submit__save" id="submit__save" name="save" type="submit" value="保存">
                    </div>
        </form>
    </main>

    <!-- bootstrap ver5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>


    <!-- https://github.com/yuki-yoshida-z/demoes/blob/master/trimming.html参照 -->
    <script src="js/vendor/cropper.js"></script>
    <script src="js/page/trimming.js?ver=1.0"></script>
    <script>
        $(".add__hobby").click(function(){
           $html = $(".item__hobby").eq(0).html();
           $(".item-4").append($html); 
        });
        
        $(".add__spend").click(function(){
           $html = $(".item__spend").eq(0).html();
           $(".item-5").append($html); 
        });

        $("#image-file").on("change", function(){
            $(".modal-btn").click();
        });
    </script>
</body>
</html>

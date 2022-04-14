<!-- バックエンド -->
<?php 
    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $sex = $_POST["sex"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $reserve1 = $_POST["reserve1"];
        $reserve2 = $_POST["reserve2"];
        $reserve3 = $_POST["reserve3"];
        $memo = $_POST["memo"];
    }
    if (isset($_POST["submit"])) {
        // サンクスページに画面遷移させる
        header("Location:http://localhost:8000/THA-lesson/thanks.php");
        exit;
    }
?>
<!-- フロントエンド -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <!-- Bootstrap読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="style_confirm.css">
</head>
<body>
    <div class="container">
        <div class="block-header">
            <img src="img/logo.png" alt="THAロゴ">
            <ul class="header-list">
                <li class="lesson">
                    <a href="#">認定講座</a>
                </li>
                <li class="about">
                    <a href="#">協会について</a>
                </li>
                <li class="overview">
                    <a href="#">協会概要</a>
                </li>
            </ul>
        </div>
        <!-- スマホ対応（ハンバーガーメニュー） -->
        <div class="header-sp">
            <img src="img/logo-sp.png" alt="スマホ用ロゴ">
            <button type="button" class="header-button">
                <div class="h-menu">
                    <input id="h-menu_checkbox" class="h-menuCheckbox" type="checkbox">
                    <label class="h-menu_icon" for="h-menu_checkbox"><span class="hamburger-icon"></span></label>
                    <label id="h-menu_black" class="h-menuCheckbox" for="h-menu_checkbox"></label>
                    <div id="h-menu_content">
                        <ul>
                            <li><a href="#">認定講座</a></li>
                            <li><a href="#">協会について</a></li>
                            <li><a href="#">協会概要</a></li>
                        </ul>
                        <div class="h-menu_policy">
                            <p><a href="#">プライバシー</a><p>
                            <p><a href="#">特定商取引法に基づく表示</a></p>
                            <p>Copyright ©︎ トータルヘルスケア協会</p>
                        </div>
                    </div>
                </div>
            </button>
        </div>
        <!-- 問い合わせ内容確認 -->
        <div>
            <form action="thanks.php" method="post">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="sex" value="<?php echo $sex; ?>">
                <input type="hidden" name="age" value="<?php echo $age; ?>">
                <input type="hidden" name="address" value="<?php echo $address; ?>">
                <input type="hidden" name="reserve1" value="<?php echo $reserve1; ?>">
                <input type="hidden" name="reserve2" value="<?php echo $reserve2; ?>">
                <input type="hidden" name="reserve3" value="<?php echo $reserve3; ?>">
                <input type="hidden" name="memo" value="<?php echo $memo; ?>">
                <div class="content_detail">
                    <span>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</span>
                    <div class="qa">
                        <div class="qa-1">
                            <div class="name">
                                <label>お名前</label>
                                <p><?php echo $name; ?></p>
                            </div>
                            <div class="phone">
                                <label>お電話番号</label>
                                <p><?php echo $phone; ?></p>
                            </div>
                            <div class="email">
                                <label>メールアドレス</label>
                                <p><?php echo $email; ?></p>
                            </div>
                            <div class="sex">
                                <label>性別</label>
                                <p><?php echo $sex; ?></p>
                            </div>
                            <div class="age">
                                <label>ご年齢</label>
                                <p><?php echo $age; ?></p>
                            </div>
                            <div class="address">
                                <label>お住まいの都道府県</label>
                                <p><?php echo $address; ?></p>
                            </div>
                        </div>
                        <div class="qa-2">
                            <div class="reserve1">
                                <label>第１希望</label>
                                <p><?php echo $reserve1; ?></p>
                            </div>
                            <div class="reserve2">
                                <label>第２希望</label>
                                <p><?php echo $reserve2; ?></p>
                            </div>
                            <div class="reserve3">
                                <label>第３希望</label>
                                <p><?php echo $reserve3; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="memo">
                        <label>ご質問内容</label>
                        <p><?php echo $memo; ?></p>
                    </div>
                </div>
               
                <div class="btn">
                    <input type="button" value="内 容 修 正" onclick="history.back(-1)">
                    <button type="submit" name="submit">送信する</button>
                </div>
            </form>
        </div>
        <div class="privacy-policy">
            <a href="#">プライバシー</a>
            <a href="#">特定商取引法に基づく表示</a>
        </div>
        <div class="block-footer">
            <p>Copyright ©︎ トータルヘルスケア協会</p>
        </div>
    </div>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Bootstrap読み込み -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="style_thanks.css">
</head>
<body>
    <div class="container">
        <div class="block-header">
            <img src="img/logo.png" alt="THAロゴ">
            <ul class="header-list">
                <li class="lesson">
                    <a href="#lesson-detail">認定講座</a>
                </li>
                <li class="about">
                    <a href="#association-about">協会について</a>
                </li>
                <li class="overview">
                    <a href="#association-overview">協会概要</a>
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
                            <li><a href="#lesson-detail">認定講座</a></li>
                            <li><a href="#association-about">協会について</a></li>
                            <li><a href="#association-overview">協会概要</a></li>
                        </ul>
                        <div class="h-menu_policy">
                            <p><a href="https://totalhealthcare.ne.jp/privacypolicy/">プライバシー</a><p>
                            <p><a href="https://totalhealthcare.ne.jp/policy/">特定商取引法に基づく表示</a></p>
                            <p>Copyright ©︎ トータルヘルスケア協会</p>
                        </div>
                    </div>
                </div>
            </button>
        </div>
        <!-- 送信完了 -->
        <div class="send-done">
        <?php
            try{
                // MySQLに接続
                $dsn = 'mysql:host=mysql2013.db.sakura.ne.jp;dbname=kuritacooking_tha-lesson;charaset=utf8mb4_general_ci';
                $user = 'kuritacooking';
                $pass = 'sRFO889YYG0q';
                $dbh = new PDO($dsn,$user,$pass,[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ]);

                //MySQLにデータを追加
                //index.phpの値を取得
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $sex = $_POST['sex'];
                $age = $_POST['age'];
                $address = $_POST['address'];
                $reserve1 = $_POST['reserve1'];
                $reserve2 = $_POST['reserve2'];
                $reserve3 = $_POST['reserve3'];
                $memo = $_POST['memo'];

                $data = "接続成功";

                $sql = "INSERT INTO application_list (name, phone, email, sex, age, address, reserve1, reserve2, reserve3, memo) VALUES (:name, :phone, :email, :sex, :age, :address, :reserve1, :reserve2, :reserve3, :memo)"; // INSERT文を変数に格納。:nameや:emailはプレースホルダという、値を入れるための単なる空箱
                $stmt = $dbh->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
                $params = array(':name' => $name, ':phone' => $phone, ':email' => $email, ':sex' => $sex, ':age' => $age, ':address' => $address, ':reserve1' => $reserve1, ':reserve2' => $reserve2, ':reserve3' => $reserve3, ':memo' => $memo); // 挿入する値を配列に格納する
                $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

                echo '<script>';
                echo 'console.log('. json_encode( $data ) .')';
                echo '</script>'; 

                echo '<p>送信いたしました。</p>';
                echo '<p>お問い合わせいただき、誠にありがとうございました。</p>'; 
            } catch (PDOException $e) {
                echo '登録中にエラーが発生しました。もう一度やり直してください。' . $e -> getMessage();
                exit();
            };
        ?>
        </div>
        <a href="index.php" class="btn">ホームへ</a>
        <!-- フッター -->
        <div class="privacy-policy">
            <a href="https://totalhealthcare.ne.jp/privacypolicy/">プライバシー</a>
            <a href="https://totalhealthcare.ne.jp/policy/">特定商取引法に基づく表示</a>
        </div>
        <div class="block-footer">
            <p>Copyright ©︎ トータルヘルスケア協会</p>
        </div>
    </div>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>
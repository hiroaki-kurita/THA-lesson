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
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <div><h1>Company Name</h1></div>
        <div><h2>お問い合わせ</h2></div>
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
                <h1 class="contact-title">お問い合わせ 内容確認</h1>
                <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
                <div>
                    <div>
                        <label>お名前</label>
                        <p><?php echo $name; ?></p>
                    </div>
                    <div>
                        <label>お電話番号</label>
                        <p><?php echo $phone; ?></p>
                    </div>
                    <div>
                        <label>メールアドレス</label>
                        <p><?php echo $email; ?></p>
                    </div>
                    <div>
                        <label>性別</label>
                        <p><?php echo $sex; ?></p>
                    </div>
                    <div>
                        <label>ご年齢</label>
                        <p><?php echo $age; ?></p>
                    </div>
                    <div>
                        <label>お住まいの都道府県</label>
                        <p><?php echo $address; ?></p>
                    </div>
                    <div>
                        <label>第１希望</label>
                        <p><?php echo $reserve1; ?></p>
                    </div>
                    <div>
                        <label>第２希望</label>
                        <p><?php echo $reserve2; ?></p>
                    </div>
                    <div>
                        <label>第３希望</label>
                        <p><?php echo $reserve3; ?></p>
                    </div>
                    <div>
                        <label>備考</label>
                        <p><?php echo $memo; ?></p>
                    </div>
                </div>
                <input type="button" value="内容を修正する" onclick="history.back(-1)">
                <button type="submit" name="submit">送信する</button>
            </form>
        </div>
    </div>
</body>
</html>
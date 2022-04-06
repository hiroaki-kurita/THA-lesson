<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <!-- Bootstrap読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Company Name</h1>
    <h2>お問い合わせ</h2>
    <div>
    <?php
        $dsn = 'mysql:host=localhost;dbname=tha_lesson;charaset=utf8';
        $user = 'tha';
        $pass = 'totalhealth9921';

        $dbh = new PDO($dsn,$user,$pass);

        try{
            $dbh = new PDO($dsn,$user,$pass,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ]);
                echo '接続成功';
            } catch(PDOException $e){
                echo '接続失敗' . $e -> getMessage();
                exit();
            };

            echo "<br>";

        try{
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


            $sql = "INSERT INTO application_list (name, phone, email, sex, age, address, reserve1, reserve2, reserve3, memo) VALUES (:name, :phone, :email, :sex, :age, :address, :reserve1, :reserve2, :reserve3, :memo)"; // INSERT文を変数に格納。:nameや:emailはプレースホルダという、値を入れるための単なる空箱
            $stmt = $dbh->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
            $params = array(':name' => $name, ':phone' => $phone, ':email' => $email, ':sex' => $sex, ':age' => $age, ':address' => $address, ':reserve1' => $reserve1, ':reserve2' => $reserve2, ':reserve3' => $reserve3, ':memo' => $memo); // 挿入する値を配列に格納する
            $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

            echo '<h1>お問い合わせ 送信完了</h1>';
            echo '<p>お問い合わせありがとうございました。</p>'; // 登録完了のメッセージ
            echo '<p>内容を確認のうえ、回答させて頂きます。</p>';
            echo '<p>しばらくお待ちください。</p>';

        } catch (PDOException $e) {
            echo '登録中にエラーが発生しました。もう一度やり直してください。' . $e -> getMessage();
            exit();
        };
    ?>


        <a href="index.php">
            <button type="button">お問い合わせに戻る</button>
        </a>
    </div>
</body>
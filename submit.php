<?php
    //サニタイズ
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8'); 
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8'); 
    $tel = htmlspecialchars($_POST["tel"], ENT_QUOTES, 'UTF-8'); 
    $category = htmlspecialchars($_POST["category"], ENT_QUOTES, 'UTF-8'); 
    $memo = htmlspecialchars($_POST["memo"], ENT_QUOTES, 'UTF-8'); 

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = $email;
    $title = "（サンプル）【visa YOKOHAMA】お問い合わせ完了のお知らせ";
    $message = 
"${name}様
\n
\nご利用ありがとうございます。
\nお問い合わせ内容は以下の通りです。
\n追記事項や、修正などございましたら、こちらのメールにご返信ください。
\n
\n-----------------------------------
\n・ご連絡先
\n${tel}
\n
\n・区分
\n${category}
\n
\n・備考
\n${memo}
\n-----------------------------------
\n
\nお返事までもう少々お待ちくださいませ。
\n
\nvisa YOKOHAMA
\n白石
\n";
    $headers = "From: info@shirono000.net ";

    //ここからエラーチェック
    $result_success = "問い合せ完了メールをお送りさせていただきましたのでご確認ください。";
    $result_fault = "メール送信に失敗しました。お手数ですが、「戻る」ボタンを押していただき、もう一度お試しいただくか、お電話いただけますと幸いです。";

    if(empty($name) || empty($email) || empty($tel) || empty($category)){
        $result = $result_fault;
        if(empty($name)){
            $error_message[] = "※名前を入力してください";
        }
        if(empty($email)){
            $error_message[] = "※メールアドレスを入力してください";
        }
        if(empty($tel)){
            $error_message[] = "※電話番号を入力してください";
        }
        if($category == "未選択"){
            $error_message[] = "※区分を選択してください";
        }
    //ここまで空欄がないかのチェック
    //mbでちゃんと遅れたかのチェック
    }else if(mb_send_mail($to, $title, $message, $headers)){
        $result = $result_success;
    }else{
        $result = $result_fault;
    }
    //$error_messeageと$resultは「id=SMC_desc」に出力。
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/visayokohama.css">
    <link rel="stylesheet" href="css/submit.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="visayokohama.js" type="text/javascript"></script>
    <title>問い合せ完了 | visa YOKOHAMA(サンプル)</title>
</head>
<body>
<header id = "header">
    <div id = "header_container">
        <div id = "logo">
            <a href = "index.php" class = "logo"><h1>visa YOKOHAMA</h1></a>
        </div>
        <div class = "nav" id = "nav_pc">
            <ul>
                <li><a href = "#">ご依頼の流れ</a></li>
                <li><a href = "#">報酬表</a></li>
                <li><a href = "#">会社案内</a></li>
                <li><a href = "#">お客さまの声</a></li>
            </ul>
        </div>
        <div id = "nav_phone">
            <a href = "#" class = "bars">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div id = "nav_phone_content">
                <ul>
                    <li><a href = "#">ご依頼の流れ</a></li>
                    <li><a href = "#">報酬表</a></li>
                    <li><a href = "#">会社案内</a></li>
                    <li><a href = "#">お客さまの声</a></li>
                </ul>
            </div>
            <div class = "overlay"></div>
        </div>
    </div><!--header_container-->
</header>

<section id = "submit_main">
    <div id = "submit_main_container">
        <div id = "SMC_title">
            <h1>お問い合わせありがとうございます！</h1>
        </div>
        <div id = "SMC_desc">
            <?php if( !empty($error_message) ): ?>
                <ul class="error_message">
                    <?php foreach( $error_message as $value ): ?>
                        <li><?=$value; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <p><?= $result; ?></p>
        </div>
        <div id = "SMC_form">
            <div class = "SMC_form_line">
                <div class = "SMC_form_name">
                    <p>名前</p>
                </div>
                <div class = "SMC_form_value">
                    <p><?= $name; ?></p>
                </div>
            </div>
            <div class = "SMC_form_line">
                <div class = "SMC_form_name">
                    <p>Eメール</p>
                </div>
                <div class = "SMC_form_value">
                    <p><?= $email; ?></p>
                </div>
            </div>
            <div class = "SMC_form_line">
                <div class = "SMC_form_name">
                    <p>電話番号</p>
                </div>
                <div class = "SMC_form_value">
                    <p><?= $tel; ?></p>
                </div>
            </div>
            <div class = "SMC_form_line">
                <div class = "SMC_form_name">
                    <p>区分</p>
                </div>
                <div class = "SMC_form_value">
                    <p><?= $category; ?></p>
                </div>
            </div>
            <div class = "SMC_form_line">
                <div class = "SMC_form_name">
                    <p>備考</p>
                </div>
                <div class = "SMC_form_value">
                    <p><?= $memo; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div id = "button_container">
        <a href="index.php"><button>戻る</button></a>
    </div>
</section>

<footer>
    <p><small>🄫2021　SHIRAISHI MIKU ウェブサイト制作事例</small></p>
</footer>
</body>
</html>
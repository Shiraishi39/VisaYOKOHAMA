<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="白石弥来PortfolioのサンプルWebサイトです。">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/visayokohama.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="visayokohama.js" type="text/javascript"></script>
    <title>visa YOKOHAMA(サンプル)</title>
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

<section id = "main">
    <div id="side_menu">
        <a href="tel:+81-90-0000-0000"><div class="side_menu" id="tel_side"><i class="fas fa-phone-volume"></i><span id="tel_span">電話</span></div></a>
        <a href="#form"><div class="side_menu" id="mail_side"><i class="fas fa-envelope"></i><span id="form_span"><p>問い合せ</p><p>フォーム</p></span></div></a>
    </div>
    <div id="top_wrapper">
        <div id="top">
            <div id="topImg"><img src="img/globalbusiness.jpg"></div>
            <p class="topText">面倒な作業、<br>すべてお任せください<br>就労・国際結婚のビザを手配</p>
        </div><!--top-->
    </div><!--top_wrapper-->
    <div id="intro_wrapper">
        <div id="intro_containers">
            <div id="introLeft" class="intro_container">
                <div id="introLeft_img">
                    <img src="img/neko.jpg">
                </div>
            </div>
            <div id="introRight" class="intro_container">
                <div id="introRight_subText">横浜の行政書士事務所</div>
                <div id="introRight_logo">visa YOKOHAMA</div>
                <div id="introRight_box">
                    <ul>
                        <li>かんたん見積もり！</li>
                        <li>相談無料です。</li>
                        <li>まずはお問い合わせください！</li>
                    </ul>
                </div> 
            </div>
        </div><!--#intro_containers-->
    </div><!--#intro_wrapper-->
</section><!--main-->
<section id="ba_wrapper">
    <div id="ba_container">
        <div class="ba" id="before">
            <div class="ba_title" id="before_title">Before</div>
            <div class="ba_img" id="before_img">
                <img src="img/syoruinoyama.jpg">
            </div>
            <div class="ba_box" id="before_box">
                ビザの情報収集・書類作成は膨大な<br>
                時間が取られてしまいます。<br>
                普段のお仕事・生活にも影響が…
            </div>
        </div>
        <div id="yazi">→</div>
        <div class="ba" id="after">
            <div class="ba_title" id="after_title"> After</div>
            <div class="ba_img" id="after_img">
                <img src="img/akusyu2.jpg">
            </div>
            <div class="ba_box" id="after_box">
                必要書類を依頼内容に<br>
                合わせて作成したリストに沿って<br>
                ご用意していただくだけ！
            </div>
        </div>
    </div><!--bf_container-->
</section><!--bf_wrapper-->

<section id="yellow_wrapper">
    <div id="yellow_text">
        \ 最大3週間でご用意 /
    </div>
    <div id="yellow_img">
        <div><img src="img/満足度.png"></div>
        <div><img src="img/受注数.png"></div>
        <div><img src="img/安心.png"></div>
    </div> 
</section><!--yellow_wrapper-->

<section id="form_wrapper">
    <div id="form">
        <div class="title_s">お問合せ</div>
        <p>※緊急の場合は、下記の<a href="#contact">電話</a>におかけください。</p>
        <!--ここからform-->
        <form  method = "post" action = "submit.php" target = "_self">
            <div class="form_item"><span>必須</span>名前</div>
                <input type="text" name="name" placeholder="横浜 びざ太郎">
            <div class="form_item"><span>必須</span>Eメール</div>
                <input type="email" name="email" placeholder="example@mail.com">
            <div class="form_item" ><span>必須</span>電話番号</div>
                <input type="tel" name="tel" placeholder="08011112222">
            <div class="form_item"><span>必須</span>区分</div>
                <select name="category" >
                    <option value="未選択">選択してください</option>
                    <option value="国際結婚">国際結婚</option>
                    <option value="就業">就業</option>
                    <option value="留学">留学</option>
                    <option value="その他">その他</option>
                </select>
            <div class="form_item">備考</div>
                <textarea name="memo" rows="10"></textarea>
            <input id = "submit" name = "submit" type = "submit" value = "送信">
        </form>
    </div><!--form-->
</section><!--form_wrapper-->

<section id="blog_wrapper">
    <div class="title_s">Blog</div>
    <div id="blogs">
        <div class="proto_blog">
            <div class="b_left">
                <div class="sample_img"></div>
            </div>
            <div class="b_right">
                <h4>ここにタイトルが来ます</h4>    
                <div class="blog_text">サンプルテキスト本文はここに入りますサンプルテキスト
                    本文はここに入りますサンプルテキスト</div>
            </div>
        </div>
        <div class="proto_blog">
            <div class="b_left">
                <div class="sample_img"></div>
            </div>
            <div class="b_right">
                <h4>ここにタイトルが来ます</h4>    
                <div class="blog_text">サンプルテキスト本文はここに入りますサンプルテキスト
                    本文はここに入りますサンプルテキスト</div>
            </div>
        </div>

        <div class="proto_blog">
            <div class="b_left">
                <div class="sample_img"></div>
            </div>
            <div class="b_right">
                <h4>ここにタイトルが来ます</h4>    
                <div class="blog_text">サンプルテキスト本文はここに入りますサンプルテキスト
                    本文はここに入りますサンプルテキスト</div>
            </div>
        </div>
    </div><!--blogs-->
</section><!--blog_wrapper-->
<section id="contact_wrapper">
    <div id="contact">
        <a href="tel:+81-0000-0000">
            <div id="tel_box">
                <h3><i class="fas fa-phone-volume"></i> 090-0000-0000</h3>
                <p>【営業時間】平日 9:30～21:00／土日祝除く</p>
            </div>
        </a>
        <a href="#form">
            <div id="form_box">
                <h3><i class="fas fa-envelope"></i> お問い合わせ</h3>
                <p>お問い合わせ後、担当者より</p><p>3営業日以内にご返答いたします。</p>
            </div>
        </a>
    </div><!--cw-->
</section><!--contact=wrapper-->

<footer>
    <p>
        <small>🄫2021　SHIRAISHI MIKU ウェブサイト制作事例</small>
    </p>
</footer>
    
</body>
</html>
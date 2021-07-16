<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/config.php';

//ページ用の変数
$page_title = 'Sample page';
$page_description = '';
$page_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.co.jp/'; 

?>
<!DOCTYPE html>
<html lang="ja">
<head>

<!-- meta -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/meta.php';?>

<!-- link css -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/css.php';?>

</head>

<body class="<?php echo STORE_NAME; ?> content">

<div class="wrapper" id="data" v-cloak>

<?php
/**
 * Header
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/header.php'; ?>
 

<?php
/**
 * Main contents
 */
?>
<ul class="breadcrumb">
	<li><a href="/">HOME</a></li>
	<li>お問い合わせ</li>
</ul>

<main class="main-contents">
	
	<div class="container content__page  fx_ctxt media--guide">
		<h1 class="text-center">お問い合わせ</h1>

		<div class="content max-content confirm">
            <div class="box-contact">
                <div class="step-contact">
                    <ul>
                        <li>
                            <div class="item-step text-center">
                                <div class="numb">1</div>
                                <p>問い合わせ内容入力</p>
                            </div>
                        </li>
                        <li>
                            <div class="item-step text-center">
                                <div class="numb active">2</div>
                                <p>内容確認</p>
                            </div>
                        </li>
                        <li>
                            <div class="item-step text-center">
                                <div class="numb">3</div>
                                <p>完了</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contact-info">
                	すべて必須項目になります。必ずご記入下さいますよう、お願いいたします。 <br>ご記入いただけない場合はお問い合わせフォームよりお問い合わせはいただけません。 <br>また、入力いただいた連絡先に誤りがありますとご連絡が取れませんのでご注意ください。
                </div>
                <div class="box-txt">
                    <p>必要事項をご入力の上、確認ボタンをクリックしてください。 </p>
                </div>
                <div class="form-contact max-content">
                    <form action="" id="form">
                        <div class="list-item-form">
                            <div class="item">
                                <div class="left">お問い合わせ区分<span>必須</span></div>
                                <div class="right op-cic">
                                    <ul>
                                        <li>
                                            企業様からのご相談
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item">
                                <div class="left">お名前 <span>必須</span></div>
                                <div class="right">お名前</div>
                            </div>

                            <div class="item">
                                <div class="left">お名前（ふりがな）<span>必須</span></div>
                                <div class="right">ヤマダタロウ</div>
                            </div>

                            <div class="item">
                                <div class="left">会社・団体名</div>
                                <div class="right">株式会社テイスト</div>
                            </div>

                            <div class="item">
                                <div class="left">メールアドレス <span>必須</span></div>
                                <div class="right">test@gmail.com</div>
                            </div>

                            <div class="item">
								<div class="left">お問い合わせ内容 <span>必須</span></div>
								<div class="right op-cic pb-3">

									※製品のお問い合わせは製品名と型番の記載をお願い致します。※製品のお問い合わせは製品名と型番の記載をお願い致します。※製品のお問い合わせは製品名と型番の記載をお願い致します。※製品のお問い合わせは製品名と型番の記載をお願い致します。※製品のお問い合わせは製品名と型番の記載をお願い致します。※製品のお問い合わせは製品名と型番の記載をお願い致します。
								</div>
							</div>
                        </div>
                        <div class="btn-contact">
                            <div class="d-flex"> 
                                <button type="submit" class="path-bott">戻る</button>
                                <button type="submit" class="path-bott">確認画面へ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

	</div>
	
</main>

<?php
/**
 * Footer
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/footer.php'; ?>

</div>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/js.php';?>

<!-- /Javascript -->
</body>
</html>

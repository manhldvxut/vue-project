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
                                <div class="numb">2</div>
                                <p>内容確認</p>
                            </div>
                        </li>
                        <li>
                            <div class="item-step text-center">
                                <div class="numb active">3</div>
                                <p>完了</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contact-info">
                	<p>お問い合わせが完了しました。 <br> <br></p>

                    <p>お問い合わせいただきありがとうございました。<br>
                     お問い合わせを受け付けました。</p>
                     <p>
                         折り返し、担当者よりご連絡いたしますので、<br>
                        恐れ入りますが、しばらくお待ちください。
                     </p>
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

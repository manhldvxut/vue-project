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
	<li>新規お取引(企業様)</li>
</ul>

<main class="main-contents">
	
	<div class="container content__page page_buyguide fx_ctxt">
		<h1>新規お取引(企業様)</h1>
		<div class="container">
			<div class="row fx-m">
				<div class="col-lg-6 fx-p">
					<div class="guy__box">
						<h3>卸販売</h3>
						<p>ROOMMATEは卸販売を行っております。 下記よりサイト上でお取引の申請を行ってください。</p>
						<a href="https://www.superdelivery.com/p/do/psl/?word=ルームメイト&so=score&vi=1&sb=all" class="btn guy_btn" target="_blank">卸販売サイトへ</a>
						<p class="note">※ROOMMATEのAV家電ブランド「OVERTIME」の専用ショップが開きます</p>
					</div>
					<span class="ng_r">または</span>
				</div>
				<div class="col-lg-6 fx-p">
					<div class="guy__box">
						<h3>お問い合わせ</h3>
						<p>お問い合わせフォームにて新規お取引に関するご相談を承っております。下記よりフォームにお進みください。</p>
						<a href="/contact/" class="btn guy_btn partner-guide-btn">お問い合わせフォームへ</a>
					</div>
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

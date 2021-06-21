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
	<li>ご購入方法(個人様)</li>
</ul>

<main class="main-contents">
	
	<div class="container content__page page_buyguide fx_ctxt">
		<h1>ご購入方法(個人様)</h1>
		<div class="container">
			<div class="row fx-m">
				<div class="col-lg-6 fx-p">
					<div class="guy__box">
						<h3>Amazonで購入</h3>
						<p>Amazonの商品ページよりご注文いただけます。 <br>製品についてのご相談はお問い合わせフォームにて承ります。</p>
						<a href="https://www.amazon.co.jp/stores/page/659EEB0F-74BF-449A-A93C-F76C1C140C98?ingress=2&visitId=a9b71535-b6f0-472e-b8d2-a86413a10718&ref_=bl_dp_s_web_6217376051" class="btn guy_btn" target="_blank">一般家電・雑貨・理美容はこちら</a>
						<a href="https://www.amazon.co.jp/stores/page/85FE29B5-BD13-448C-B97D-DF1735936591" class="btn guy_btn" target="_blank">AV家電・カー用品はこちら</a>
						<p class="note">※ROOMMATEのAV家電ブランド「OVERTIME」の専用ショップが開きます</p>
					</div>
					<span class="ng_r">または</span>
				</div>
				<div class="col-lg-6 fx-p">
					<div class="guy__box">
						<h3>他のお取り扱い店で購入</h3>
						<p>Amazon以外のお取り扱い店での購入を希望される方は、次の手順でお店を検索してください。</p>
						<div class="guy_step">
							<div class="row">
								<div class="col-lg-7">
									<div class="d-flex align-items-center">
										<p class="step">step 1</p>
										<h4>品番をコピー</h4>
									</div>
									<p>製品詳細ページに記載してある品番をコピーしてください。</p>
								</div>
								<div class="col-lg-5">
									<img src="/assets/images/guy-buy/guy01.png">
								</div>
								<div class="col-lg-7">
									<div class="d-flex align-items-center">
										<p class="step">step 2</p>
										<h4>コピーした品番を検索</h4>
									</div>
									<p>検索サイトにてコピーした品番を検索してください。</p>
								</div>
								<div class="col-lg-5">
									<img src="/assets/images/guy-buy/guy02.png">
								</div>
								<div class="col-lg-7">
									<div class="d-flex align-items-center">
										<p class="step">step 3</p>
										<h4>お取り扱い店を選ぶ</h4>
									</div>
									<p>お取り扱い店の中から自分に合ったお店でご購入ください。</p>
								</div>
								<div class="col-lg-5">
									<img src="/assets/images/guy-buy/guy03.png">
								</div>
							</div>
						</div>
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

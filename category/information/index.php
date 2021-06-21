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
	<li>お知らせ</li>
</ul>

<main class="main-contents">
	
	<div class="container content__page  fx_ctxt">
		<h1>お知らせ</h1>
		<div class="row">
			<div class="col-lg-6">
				<div class="news__list news__body--item">
					<ul class="news__list-info">
						<li class="ftr"><img src="/assets/images/top/prd03.png"></li>
						<li class="ftr">
							<ul class="d-flex">
								<li class="time">2021.05.27</li> 
								<li><a href="" class="tag">#MEDIA</a></li>
							</ul>
							<h3><a href="/category/information/">【TV放映】フジテレビ「めざましテレビ」の「スゴ撮」にて無煙グリル ゼロスモークDX(RM-103TE)が紹介されました。</a></h3>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="news__list news__body--item">
					<ul class="news__list-info">
						<li class="ftr"><img src="/assets/images/top/prd03.png"></li>
						<li class="ftr">
							<ul class="d-flex">
								<li class="time">2021.05.27</li> 
								<li><a href="" class="tag">#MEDIA</a></li>
							</ul>
							<h3><a href="/category/information/">【TV放映】フジテレビ「めざましテレビ」の「スゴ撮」にて無煙グリル ゼロスモークDX(RM-103TE)が紹介されました。</a></h3>
						</li>
					</ul>
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

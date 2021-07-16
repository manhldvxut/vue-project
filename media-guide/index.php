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
	<li>メディア掲載のご依頼</li>
</ul>

<main class="main-contents">
	
	<div class="container content__page  fx_ctxt media--guide">
		<h1>メディア掲載のご依頼</h1>
		<div class="contact contact--box">
			<h3>お問い合わせ</h3>
			<p>テレビ・雑誌・WEBサイトなどのメディア掲載に関するご依頼はお問い合わせフォームにて承っております。</p>
			<a href="/contact/" class="btn guy_btn partner-guide-btn">お問い合わせフォームへ</a>
		</div>
		<div class="media--section">
			<h2>主なメディア掲載実績</h2>
			<div class="row m-25">
				<div class="col-lg-6 p-25" v-for="(index) in 14">
					<div class="news__body--item">
						<ul class="align-items-center">
							<li class="time">2021.06.22</li> 
							<li><a href="" class="tag">#MEDIA</a></li>
						</ul>
						<h4>RKB毎日放送（福岡）「タダイマ！」</h4>
						<h3><a href="">「スティックパンケーキメーカー」が紹介されました。</a></h3>
					</div>
				</div>
			</div>
			<div class="btn-holder text-center"><a href="/category/information/" class="btn hover_all"><span>他 多数掲載実績あり</span></a></div>
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

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
	
	<div class="container content__page  fx_ctxt category__page">
		<h1>お知らせ</h1>
		<div class="row category__information">
			<div class="col-lg-6" v-for="(categoryNew, index) in news.slice().reverse()" v-bind:key = "index">
				<div class="news__list news__body--item">
					<ul class="news__list-info">
						<li class="ftr"><img :src="'/assets/images/top/' + categoryNew.image"></li>
						<li class="ftr">
							<ul class="d-flex">
								<li class="time">{{categoryNew.time}}</li> 
								<li><a href="" class="tag">#{{categoryNew.tag}}</a></li>
							</ul>
							<h3><a href="/category/information/detail">{{categoryNew.title}}</a></h3>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/companents/pagination.php'; ?>
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

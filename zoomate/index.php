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

<body class="<?php echo STORE_NAME; ?>">

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

<main class="main-contents">
	<section class="slider__main slider">
		<div class="js-slider-top">
			<div class="slider__main-item">
				<img class="only_pc" src="/assets/images/mv.png">
				<img class="only_sp" src="/assets/images/sp_mv.png">
				<div class="slider__main-info">
					<h3>置くだけで料理を保温<br>
					HOMEビュッフェプレート・ネオ</h3>
					<a class="btn-all" href="">詳しく見る</a>
				</div>
			</div>
			<div class="slider__main-item">
				<img class="only_pc" src="/assets/images/mv02.jpg">
				<img class="only_sp" src="/assets/images/mv02.jpg">
				<div class="slider__main-info">
					<h3>暮らしに華を、生活に彩を<br>
					HOMEビュッフェプレート・ネオ</h3>
					<a class="btn-all" href="">詳しく見る</a>
				</div>
			</div>
		</div>
	</section>
	<section class="pickup slider hidden" v-infocus="'showElement'">
		<div class="container-fluid">
			<h2>PICK UP
				<span class="jp">ピックアップ</span>
			</h2>
			<div class="row pickup__body js-slider-pickup">
				<div class="col-sm-12 col-md-12 col-lg-4 pickup__slider" v-for="(listPickupItem, index) in listPickup" v-bind:key="index">
					<a :href="listPickupItem.link">
						<img v-bind:src= "'/assets/images/top/' + listPickupItem.image" :alt="listPickupItem.title">
						<h3 v-html = "brTxt(listPickupItem.title)"></h3>
					</a>
				</div>

			</div>
		</div>
	</section>
	<section class="product hidden" v-infocus="'showElement'">
		<div class="container-fluid">
			<h2 class="text-center">PRODUCTS
				<span class="jp">おすすめの製品</span>
			</h2>
			<div class="row product__body">
				<div class="col-lg-3 col-md-6 col-6"  v-for="(products, index) in products" v-bind:key="index">
					<a :href="products.link">
						<img v-bind:src= "'/assets/images/top/' + products.image" :alt="products.title">
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
			<div class="btn-holder text-center">
				<a href="" class="btn hover_all">
				    <span>すべての製品を見る</span>
				</a>
			</div>
		</div>
	</section>
	<section class="about hidden" v-infocus="'showElement'">
		<div class="about__body">
			<h3>暮らしに華を、生活に彩を。</h3>
			<p>私たちは、日々の暮らしに華を咲かせ、<br>
				生活の中に彩りを加える<br>
				デザイン家電・生活家電を<br>
				送り届けています。
			</p>
		</div>
	</section>
	<section class="news hidden" v-infocus="'showElement'">
		<div class="container-fluid">
			<h2>news
				<span class="jp">最新のお知らせ</span>
			</h2>
			<div class="row news__body">
				<div class="col-lg-4" v-for="(newsitem, index) in news" v-bind:key="index">
					<div class="news__body--item">
						<h3><a :href="newsitem.link">{{newsitem.title}}</a></h3>
						<ul>
							<li class="time">{{newsitem.time}}</li>
							<li ><a href="" class="tag">{{newsitem.tag}}</a></li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-lg-4">
					<div class="news__body--item">
						<h3><a href="">【TV放映】フジテレビ「めざましテレビ」の「スゴ撮」にて無煙グリル ゼロスモークDX(RM-103TE)が紹介されました。</a></h3>
						<ul>
							<li class="time">2021.05.27</li>
							<li ><a href="" class="tag">#MEDIA</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="news__body--item">
						<h3><a href="">【TV放映】フジテレビ「めざましテレビ」の「スゴ撮」にて無煙グリル ゼロスモークDX(RM-103TE)が紹介されました。</a></h3>
						<ul>
							<li class="time">2021.05.27</li>
							<li ><a href="" class="tag">#MEDIA</a></li>
						</ul>
					</div>
				</div> -->
			</div>
			<a href="" class="viewall">すべてのお知らせを見る</a>
		</div>
	</section>
	
</main>





<?php
/**
 * Footer
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/footer.php'; ?>

</div>

<!-- Javascript -->


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/js.php';?>

<!-- /Javascript -->
</body>
</html>

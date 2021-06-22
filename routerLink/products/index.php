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

<main class="main-contents">
	
	<div class="container content__page">
		<!-- 家事家電 -->
		<section class="housework seasonal">
			<h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='家事家電' ">
				{{products.product_type}}
			</h2>

			<div class="count__item">{{count_houseWork}} Items</div>

			<div class="row product__body m-30">
				<div class="count_houseWork col-lg-4 col-md-6 col-6 hidden p-30"  
				v-for="(products, index) in convertProduct.slice().reverse()" 
				v-if="products.product_type =='家事家電'"
				v-bind:key="index" v-infocus="'showElement'" >
					<span class="new__mask">new <i class="line-run"></i></span>
					<a :href="products.link">
						<div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
		</section>

		<!-- 季節家電 -->
		<section class="housework seasonal">
			<h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='季節家電' ">
				{{products.product_type}}
			</h2>

			<div class="count__item">{{count_seasonal}} Items</div>

			<div class="row product__body m-30">
				<div class="count_seasonal col-lg-4 col-md-6 col-6 hidden p-30"  
				v-for="(products, index) in convertProduct.slice().reverse()" 
				v-if="products.product_type =='季節家電'"
				v-bind:key="index" v-infocus="'showElement'" >
					<span class="new__mask">new <i class="line-run"></i></span>
					<a :href="products.link">
						<div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
		</section>

		<!-- カー用品 -->
		<section class="housework seasonal">
			<h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='カー用品' ">
				{{products.product_type}}
			</h2>

			<div class="count__item">{{count_carSupplies}} Items</div> 

			<div class="row product__body m-30">
				<div class="count_carSupplies col-lg-4 col-md-6 col-6 hidden p-30"  
				v-for="(products, index) in convertProduct.slice().reverse()" 
				v-if="products.product_type =='カー用品'"
				v-bind:key="index" v-infocus="'showElement'" >
					<span class="new__mask">new <i class="line-run"></i></span>
					<a :href="products.link">
						<div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
		</section>

		<!-- 雑貨 -->
		<section class="housework seasonal">
			<h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='雑貨' ">
				{{products.product_type}}
			</h2>

			<div class="count__item">{{count_miscellaneous}} Items</div>

			<div class="row product__body m-30">
				<div class="count_miscellaneous col-lg-4 col-md-6 col-6 hidden p-30"  
				v-for="(products, index) in convertProduct.slice().reverse()" 
				v-if="products.product_type =='雑貨'"
				v-bind:key="index" v-infocus="'showElement'" >
					<span class="new__mask">new <i class="line-run"></i></span>
					<a :href="products.link">
						<div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
		</section>

		<!-- 理美容 -->
		<section class="housework seasonal">
			<h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='理美容' ">
				{{products.product_type}}
			</h2>

			<div class="count__item">{{count_hairdressing}} Items</div>

			<div class="row product__body m-30">
				<div class="count_hairdressing col-lg-4 col-md-6 col-6 hidden p-30"  
				v-for="(products, index) in convertProduct.slice().reverse()" 
				v-if="products.product_type =='理美容'"
				v-bind:key="index" v-infocus="'showElement'" >
					<span class="new__mask">new <i class="line-run"></i></span>
					<a :href="products.link">
						<div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
		</section>

		<!-- AV家電 -->
		<section class="housework seasonal">
			<h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='AV家電' ">
				{{products.product_type}}
			</h2>

			<div class="count__item">{{count_avAppliances}} Items</div>

			<div class="row product__body m-30">
				<div class="count_avAppliances col-lg-4 col-md-6 col-6 hidden p-30"  
				v-for="(products, index) in convertProduct.slice().reverse()" 
				v-if="products.product_type =='AV家電'"
				v-bind:key="index" v-infocus="'showElement'" >
					<span class="new__mask">new <i class="line-run"></i></span>
					<a :href="products.link">
						<div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
		</section>

		<!-- 調理家電 -->
		<section class="housework seasonal">
			<h2  v-for="(products, id) in fitter_productType" v-bind:key="id" v-infocus="'showElement'" v-if="products.product_type =='調理家電' ">
				{{products.product_type}}
			</h2>

			<div class="count__item">{{count_cooking}} Items</div>

			<div class="row product__body m-30">
				<div class="count_cooking col-lg-4 col-md-6 col-6 hidden p-30"  
				v-for="(products, index) in convertProduct.slice().reverse()" 
				v-if="products.product_type =='調理家電'"
				v-bind:key="index" v-infocus="'showElement'" >
					<span class="new__mask">new <i class="line-run"></i></span>
					<a :href="products.link">
						<div class="hover_scale"><img v-bind:src= " '/assets/images/top/' + products.image" :alt="products.title"></div>
						<h3 v-html = "brTxt(products.title)"></h3>
					</a>
				</div>
			</div>
		</section>
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

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

	<div class="container-fluid content__page content__page--product_detail" v-for="(products, index) in convertProduct" 
	v-bind:key="index" v-if=" id == index + 1 " id="features">
		<section class="product__detail">
			<div class="row">
				<div class="col-lg-4 fx_left">
					<div class="product__detail-info">
						<a class="product__detail-info--title" :href="'/products/' + products.product_type">{{products.product_type}}</a>
						<div class="product__detail-info_head">
							<span class="new__mask">new <i class="line-run"></i></span>
							<h1>{{products.title}}</h1>
							<div class="product__detail-code">RM-103TE</div>
						</div>
						<div class="product__detail-info_review">
							<h3 v-html = "brTxt(products.h3)"></h3>
							<p  v-html = "brTxt(products.h3Info)"></p>
						</div>

						<a  :href="products.amazonLink" target="_blank" class="btn btn__amazon only_pc">Amazonで購入</a>
						
					</div>
				</div>
				<div class="col-lg-8 fx_right">
					<div class="product__detail-img">
						<img :src="'/assets/images/top/' + products.image">
					</div>
					<a  :href="products.amazonLink" target="_blank" class="btn btn__amazon sp_only">Amazonで購入</a>
				</div>
			</div>


		</section>

		<section class="product product__features fx_mr">
			<h2>PRODUCTS
				<span class="jp">おすすめの製品</span>
			</h2>
			<div class="row m-40 product__features-body">
				<div class="col-lg-6 p-40" v-if="(products.productBoxImg01Title != '')">
					<div class="hover_scale">
						<img :src="'/assets/images/products/detail/' + products.productBoxImg01">
					</div>
					<div class="product__features-info">
						<h3>{{products.productBoxImg01Title}}</h3>
						<p>{{products.productBoxImg01Info}}</p>
					</div>
				</div>
				<!-- end box 01 -->
				<div class="col-lg-6 p-40" v-if="(products.productBoxImg02Title != '')">
					<div class="hover_scale">
						<img :src="'/assets/images/products/detail/' + products.productBoxImg02">
					</div>
					<div class="product__features-info">
						<h3>{{products.productBoxImg02Title}}</h3>
						<p><p>{{products.productBoxImg02Info}}</p></p>
					</div>
				</div>
				<!-- end box 02 -->
				<div class="col-lg-6 p-40" v-if="(products.productBoxImg03Title != '')">
					<div class="hover_scale">
						<img :src="'/assets/images/products/detail/' + products.productBoxImg03">
					</div>
					<div class="product__features-info">
						<h3>{{products.productBoxImg03Title}}</h3>
						<p><p>{{products.productBoxImg03Info}}</p></p>
					</div>
				</div>
				<!-- end box 03 -->
				<div class="col-lg-6 p-40" v-if="(products.productBoxImg04Title != '')">
					<div class="hover_scale">
						<img :src="'/assets/images/products/detail/' + products.productBoxImg04">
					</div>
					<div class="product__features-info">
						<h3>{{products.productBoxImg04Title}}</h3>
						<p><p>{{products.productBoxImg04Info}}</p></p>
					</div>
				</div>
				<!-- end box 04 -->
				<div class="col-lg-6 p-40" v-if="(products.productBoxImg05Title != '')">
					<div class="hover_scale">
						<img :src="'/assets/images/products/detail/' + products.productBoxImg05">
					</div>
					<div class="product__features-info">
						<h3>{{products.productBoxImg05Title}}</h3>
						<p><p>{{products.productBoxImg05Info}}</p></p>
					</div>
				</div>
				<!-- end box 05 -->
				<div class="col-lg-6 p-40" v-if="(products.productBoxImg06Title != '')">
					<div class="hover_scale">
						<img :src="'/assets/images/products/detail/' + products.productBoxImg06">
					</div>
					<div class="product__features-info">
						<h3>{{products.productBoxImg06Title}}</h3>
						<p><p>{{products.productBoxImg06Info}}</p></p>
					</div>
				</div>
				<!-- end box 06 -->
			</div>
		</section>
	</div>

	<div class="container-fluid content__page content__page--product_detail p-0" id="specification"
	 v-for="(products, index) in products" v-if=" id == index + 1 ">
		<section class="specification">
			<div class="product fx_mr">
				<h2>SPECIFICATION
					<span class="jp">主な仕様</span>
				</h2>
				<div class="row m-40 mb-5">
					<div class="col-lg-6 p-40">
						<div class="specification__info">
							<dl class = "dl-horizontal">
								<dt>製品名</dt>
								<dd v-if="(products.specificationName !='')">{{products.specificationName}}</dd>
								<dt>型番</dt>
								<dd v-if="(products.specificationModel !='')">{{products.specificationModel}}</dd>
								<dt>JANコード</dt>
								<dd v-if="(products.specificationJanCode !='')">{{products.specificationJanCode}}</dd>
								<dt>電圧</dt>
								<dd v-if="(products.specificationVoltage !='')">{{products.specificationVoltage}}</dd>
								<dt>寸法（約）</dt>
								<dd v-if="(products.specificationDimensions !='')">{{products.specificationDimensions}}</dd>
							</dl>
						</div>
					</div>
					<div class="col-lg-6 p-40">
						<div class="specification__info">
							<dl class = "dl-horizontal">
								<dt>消費電力</dt>
								<dd v-if="(products.specificationPower !='')">{{products.specificationPower}}</dd>
								<dt>電源コード長さ</dt>
								<dd v-if="(products.specificationPowerCode !='')">{{products.specificationPowerCode}}</dd>
								<dt>質量</dt>
								<dd v-if="(products.specificationMass !='')">{{products.specificationMass}}</dd>
								<dt>プレート</dt>
								<dd v-if="(products.specificationPlate !='')">{{products.specificationPlate}}</dd>
								<dt>製造国</dt>
								<dd v-if="(products.specificationCountry !='')">{{products.specificationCountry}}</dd>
								<dt>付属品</dt>
								<dd v-if="(products.specificationAccessories !='')">{{products.specificationAccessories}}</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<a :href="'/assets/images/' + products.instructionManualLink" class="btn-all" target="_blank">取扱説明書</a>
					<a :href="'/assets/images/' + products.webImgLink" class="btn-all" target="_blank">WEB用画像</a>
				</div>
			</div>
		</section>
		<section class="buy_card text-center">
			<div class="product__detail-info_review">
				<h3 v-html = "brTxt(products.h3)"></h3>
				<h4 class="mb-5">{{products.title}}</h4>
				<div class="mb-5"><img :src="'/assets/images/top/' + products.image" :alt="products.title"></div>
				<a :href="products.amazonLink" target="_blank" class="btn btn__amazon">Amazonで購入</a>
			</div>
			
		</section>
	</div>

	<div class="scroll_spy" >
		<ul>
			<li><a class="scroll" href="#features">特徴</a></li>
			<li><a class="scroll" href="#specification">仕様</a></li>
		</ul>
	</div>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/companents/footer-other.php'; ?>
	
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

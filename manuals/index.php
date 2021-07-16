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
	<li>取り扱い説明書ダウンロード</li>
</ul>

<main class="main-contents">	
	<div class="container content__page  fx_ctxt media--guide">
		<h1>取り扱い説明書ダウンロード</h1>
		<div class="manuals--section">
			<div class="row m-25">
				<div class="col-lg-6 p-25 manuals-table-box" v-for="(productsTitle, id) in fitter_productType" v-bind:key="id">
					<h2>{{productsTitle.product_type}}</h2>
					<div class="table manuals-table">
						<table class="table">
							<thead>
								<tr>
									<th>商品名</th>
									<th>品番</th>
									<th>取扱説明書</th>
								</tr>
							</thead>
							
							<tbody v-if ="productsTitle.product_type == '家事家電' ">
								<tr v-for="(ManualsTableProduct, index) in products" v-bind:key="index" v-if= "ManualsTableProduct.product_type == '家事家電'">
									<th v-for="(productLinks, index) in convertProduct"  v-bind:key ="index" v-if="ManualsTableProduct.id == index + 1">
										<a :href="productLinks.link">{{ManualsTableProduct.title}}</a>
									</th>
									<td>{{ManualsTableProduct.productCode}}</td>
									<td class="pdf-view"><a :href="'/assets/images/' + ManualsTableProduct.instructionManualLink" target="_blank">PDF</a></td>
								</tr>
							</tbody>
							<!-- end 家事家電 -->

							<tbody v-if ="productsTitle.product_type == '季節家電' ">
								<tr v-for="(ManualsTableProduct, index) in products" v-bind:key="index" v-if= "ManualsTableProduct.product_type == '季節家電'">
									<th v-for="(productLinks, index) in convertProduct"  v-bind:key ="index" v-if="ManualsTableProduct.id == index + 1">
										<a :href="productLinks.link">{{ManualsTableProduct.title}}</a>
									</th>
									<td>{{ManualsTableProduct.productCode}}</td>
									<td class="pdf-view"><a :href="'/assets/images/' + ManualsTableProduct.instructionManualLink" target="_blank">PDF</a></td>
								</tr>
							</tbody>
							<!-- end 季節家電 -->

							<tbody v-if ="productsTitle.product_type == 'カー用品' ">
								<tr v-for="(ManualsTableProduct, index) in products" v-bind:key="index" v-if= "ManualsTableProduct.product_type == 'カー用品'">
									<th v-for="(productLinks, index) in convertProduct"  v-bind:key ="index" v-if="ManualsTableProduct.id == index + 1">
										<a :href="productLinks.link">{{ManualsTableProduct.title}}</a>
									</th>
									<td>{{ManualsTableProduct.productCode}}</td>
									<td class="pdf-view"><a :href="'/assets/images/' + ManualsTableProduct.instructionManualLink" target="_blank">PDF</a></td>
								</tr>
							</tbody>
							<!-- end カー用品 -->

							<tbody v-if ="productsTitle.product_type == '雑貨' ">
								<tr v-for="(ManualsTableProduct, index) in products" v-bind:key="index" v-if= "ManualsTableProduct.product_type == '雑貨'">
									<th v-for="(productLinks, index) in convertProduct"  v-bind:key ="index" v-if="ManualsTableProduct.id == index + 1">
										<a :href="productLinks.link">{{ManualsTableProduct.title}}</a>
									</th>
									<td>{{ManualsTableProduct.productCode}}</td>
									<td class="pdf-view"><a :href="'/assets/images/' + ManualsTableProduct.instructionManualLink" target="_blank">PDF</a></td>
								</tr>
							</tbody>
							<!-- end 雑貨 -->

							<tbody v-if ="productsTitle.product_type == '理美容' ">
								<tr v-for="(ManualsTableProduct, index) in products" v-bind:key="index" v-if= "ManualsTableProduct.product_type == '理美容'">
									<th v-for="(productLinks, index) in convertProduct"  v-bind:key ="index" v-if="ManualsTableProduct.id == index + 1">
										<a :href="productLinks.link">{{ManualsTableProduct.title}}</a>
									</th>
									<td>{{ManualsTableProduct.productCode}}</td>
									<td class="pdf-view"><a :href="'/assets/images/' + ManualsTableProduct.instructionManualLink" target="_blank">PDF</a></td>
								</tr>
							</tbody>
							<!-- end 理美容 -->

							<tbody v-if ="productsTitle.product_type == 'AV家電' ">
								<tr v-for="(ManualsTableProduct, index) in products" v-bind:key="index" v-if= "ManualsTableProduct.product_type == 'AV家電'">
									<th v-for="(productLinks, index) in convertProduct"  v-bind:key ="index" v-if="ManualsTableProduct.id == index + 1">
										<a :href="productLinks.link">{{ManualsTableProduct.title}}</a>
									</th>
									<td>{{ManualsTableProduct.productCode}}</td>
									<td class="pdf-view"><a :href="'/assets/images/' + ManualsTableProduct.instructionManualLink" target="_blank">PDF</a></td>
								</tr>
							</tbody>
							<!-- end AV家電 -->

							<tbody v-if ="productsTitle.product_type == '調理家電' ">
								<tr v-for="(ManualsTableProduct, index) in products" v-bind:key="index" v-if= "ManualsTableProduct.product_type == '調理家電'">
									<th v-for="(productLinks, index) in convertProduct"  v-bind:key ="index" v-if="ManualsTableProduct.id == index + 1">
										<a :href="productLinks.link">{{ManualsTableProduct.title}}</a>
									</th>
									<td>{{ManualsTableProduct.productCode}}</td>
									<td class="pdf-view"><a :href="'/assets/images/' + ManualsTableProduct.instructionManualLink" target="_blank">PDF</a></td>
								</tr>
							</tbody>
							<!-- end 調理家電 -->
						</table>
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

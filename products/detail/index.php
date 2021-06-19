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
<div class="col-lg-4 col-md-6 col-6 hidden p-30"  v-for="(products, index) in convertProduct" v-bind:key="index" v-infocus="'showElement'">
<p>{{products.id}}</p>
</div>

<div>
	<p>San pham chi tiet</p>
	<p>Ten san pham {{currentProduct.title}}</p>
</div>


	<div class="container-fluid content__page content__page--product_detail">
		<section class="product__detail">
			<div class="row">
				<div class="col-lg-4 fx_left">
					<div class="product__detail-info">
						<a class="product__detail-info--title" href="">家事家電</a>
						<div class="product__detail-info_head">
							<span class="new__mask">new <i class="line-run"></i></span>
							<h1>無煙グリル調理器ゼロスモークDX</h1>
							<div class="product__detail-code">RM-103TE</div>
						</div>
						<div class="product__detail-info_review">
							<h3>煙を出さずに調理ができるグリル調理器</h3>
							<p>吸煙ファンの力でけむりを循環吸引、<br>けむりやニオイを気にせずグリルを楽しめる調理器です。</p>
						</div>
						<a href="" class="btn btn__amazon">Amazonで購入</a>
					</div>
				</div>
				<div class="col-lg-8 fx_right">
					<div class="product__detail-img">
						<img src="/assets/images/top/prd01.png">
					</div>
				</div>
			</div>
		</section>
		<section class="product product__features fx_mr">
			<h2>PRODUCTS
				<span class="jp">おすすめの製品</span>
			</h2>
			<div class="row m-40 product__features-body">
				<div class="col-lg-6 p-40">
					<div class="hover_scale">
						<img src="/assets/images/products/detail/fea01.png">
					</div>
					<div class="product__features-info">
						<h3>けむりを出さないグリル調理器</h3>
						<p>吸煙ファンで循環吸引、けむりを出さずに調理ができるグリル調理器</p>
					</div>
				</div>
				<div class="col-lg-6 p-40">
					<div class="hover_scale">
						<img src="/assets/images/products/detail/fea02.png">
					</div>
					<div class="product__features-info">
						<h3>便利な2種のプレートが付属</h3>
						<p>多彩な料理が楽しめる2種のプレートが付属。 グリルプレート…表面の穴から水を入れた水トレイに油が落ちるので、余分な脂を落として焼けます。 フラットプレート…穴の空いていないプレートで餃子などの蒸し料理や焼きそば、お好み焼き、ホットケーキなど美味しく焼き上げます。</p>
					</div>
				</div>
				<div class="col-lg-6 p-40">
					<div class="hover_scale">
						<img src="/assets/images/products/detail/fea03.png">
					</div>
					<div class="product__features-info">
						<h3>見やすいデジタルディスプレイ</h3>
						<p>デジタルディスプレイは温度設定やタイマー設定の確認も見やすく分かりやすい！お好みの調理に合わせた設定が簡単に出来ます。</p>
					</div>
				</div>
				<div class="col-lg-6 p-40">
					<div class="hover_scale">
						<img src="/assets/images/products/detail/fea04.png">
					</div>
					<div class="product__features-info">
						<h3>最大250℃のハイパワー火力</h3>
						<p>温度調整は保温の80℃から高温調理の220℃まで20℃単位で設定が可能。220℃の次は最大250℃になりハイパワーでしっかり焼けます。</p>
					</div>
				</div>
				<div class="col-lg-6 p-40">
					<div class="hover_scale">
						<img src="/assets/images/products/detail/fea05.png">
					</div>
					<div class="product__features-info">
						<h3>後片付け＆お手入れ楽々</h3>
						<p>各付属品や部品は取り外せ、プレート類は中性洗剤で水洗いもOK！調理後のお手入れも楽にできます。</p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="container-fluid content__page content__page--product_detail p-0">
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
								<dd>無煙グリル調理器　ゼロスモークDX</dd>
								<dt>型番</dt>
								<dd>RM-103TE</dd>
								<dt>JANコード</dt>
								<dd>RM-4580050186931</dd>
								<dt>電圧</dt>
								<dd>AC100V　50/60Hz</dd>
								<dt>寸法（約）</dt>
								<dd>幅495×奥行320×高さ190mm（蓋含む）</dd>
							</dl>
						</div>
					</div>
					<div class="col-lg-6 p-40">
						<div class="specification__info">
							<dl class = "dl-horizontal">
								<dt>消費電力</dt>
								<dd>1200W</dd>
								<dt>電源コード長さ</dt>
								<dd>約 1 m</dd>
								<dt>質量</dt>
								<dd>約 7 kg （蓋含む）</dd>
								<dt>プレート</dt>
								<dd>アルミ鋳造フッ素加工仕上</dd>
								<dt>製造国</dt>
								<dd>中国</dd>
								<dt>付属品</dt>
								<dd>ガラス蓋、フラットプレート、グリルプレート、油受けカバー、油受け皿、取扱説明書（保証書付き）</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<a href="" class="btn-all" >取扱説明書</a>
					<a href="" class="btn-all" >WEB用画像</a>
				</div>
			</div>
		</section>
		<section class="buy_card text-center">
			<div class="product__detail-info_review">
				<h3>煙を出さずに調理ができるグリル調理器</h3>
				<h4 class="mb-5">無煙グリル調理器ゼロスモークDX</h4>
				<div class="mb-5"><img src="/assets/images/top/prd01.png" alt="無煙グリル調理器ゼロスモークDX"></div>
				<a href="" class="btn btn__amazon">Amazonで購入</a>
			</div>
			
		</section>
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

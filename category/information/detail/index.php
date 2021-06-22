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
	<li><a href="">お知らせ</a></li>
	<li>【新商品情報】13.3インチ防水DVD　OT-FDW133TE</li>
</ul>

<main class="main-contents">
	
	<div class="container content__page  fx_ctxt category__page">
		<div class="row category__information m-40">
			<div class="col-lg-9 category__information-detail p-40">
				<div class="news__list ">
					<div class="news__body--item">
						<h1>【新商品情報】13.3インチ防水DVD　OT-FDW133TE</h1>
						<ul class="d-flex">
							<li class="time">2021.05.27</li> 
							<li><a href="" class="tag">#MEDIA</a></li>
						</ul>
					</div>
					<img src="/assets/images/information/img01.png">
					<p>防水仕様なのでお風呂などでも楽しめる＋13.3インチの大きな画面で見やすい</p>
					<img src="/assets/images/information/img02.png">
					<p>地デジチューナー内蔵、電波状況に合わせてフルセグ＆ワンセグのテレビが楽しめるDVDプレーヤーです。<br><br>

					 13.3インチなので大きな画面で見やすいサイズ。IPX6相当の防水仕様なので強い噴流水にも耐え、 お風呂や洗面所・キッチンなどでも楽しめます。 <br><br>

					お手持ちのSDカードやUSBに保存してある映像データや音楽の再生が出来、CDからの録音も可能です。 <br>スタンドが180℃動くので、フックスタイルやスタンドスタイルと置き場によって選べる2WAY。 <br><br>

					壁掛けには便利な専用のフックが付属されてます。AC/DC/充電バッテリーの3電源対応。 家庭や車、屋外など場所を選ばずご使用頂けます。</p>

					<h1>テキスト入力テキスト入力テキスト入力テキスト入力 h1</h1>
					<h2>テキスト入力テキスト入力テキスト入力テキスト入力 h2</h2>
					<h3>テキスト入力テキスト入力テキスト入力テキスト入力 h3</h3>
					<h4>テキスト入力テキスト入力テキスト入力テキスト入力 h4</h4>
					<h5>テキスト入力テキスト入力テキスト入力テキスト入力 h5</h5>

					<ul>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
					</ul>
					<ol>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
						<li>テキスト入力テキスト入力テキスト入力テキスト入力</li>
					</ol>
					<dl>
						<dt>テキスト入力テキスト入力テキスト入力テキスト入力</dt>
						<dd>テキスト入力テキスト入力テキスト入力テキスト入力</dd>
						<dt>テキスト入力テキスト入力テキスト入力テキスト入力</dt>
						<dd>テキスト入力テキスト入力テキスト入力テキスト入力</dd>
						<dt>テキスト入力テキスト入力テキスト入力テキスト入力</dt>
						<dd>テキスト入力テキスト入力テキスト入力テキスト入力</dd>
						<dt>テキスト入力テキスト入力テキスト入力テキスト入力</dt>
						<dd>テキスト入力テキスト入力テキスト入力テキスト入力</dd>
						<dt>テキスト入力テキスト入力テキスト入力テキスト入力</dt>
						<dd>テキスト入力テキスト入力テキスト入力テキスト入力</dd>
					</dl>
				</div>
				<div class="list_btn">
					<a href="/assets/images/test01.pdf" target="_blank" class="btn btn-all">取扱説明書</a> 
					<a href="https://www.amazon.co.jp/" target="_blank" class="btn btn__amazon">Amazonで購入</a>
				</div>

				<div class="btn-holder text-center">
					<a href="/category/information/" class="btn hover_all">
						<span>お知らせ一覧へ戻る</span>
					</a>
				</div>
			</div>
			<div class="col-lg-3 category__information-detail p-40">
				<div class="category__information-detail_right ">
					<div class="news__body--item">
						<h5>最新の記事</h5>
							<ul class="list-title">
								<li><a href="">【雑誌掲載】モノマスター7月号に無煙グリル調理器 ゼロスモークDX RM-103TEが掲載されました。</a></li>
								<li><a href="">【雑誌掲載】モノマスター7月号に無煙グリル調理器 ゼロスモークDX RM-103TEが掲載されました。</a></li>
								<li><a href="">【雑誌掲載】モノマスター7月号に無煙グリル調理器 ゼロスモークDX RM-103TEが掲載されました。</a></li>
								<li><a href="">【雑誌掲載】モノマスター7月号に無煙グリル調理器 ゼロスモークDX RM-103TEが掲載されました。</a></li>
								<li><a href="">【雑誌掲載】モノマスター7月号に無煙グリル調理器 ゼロスモークDX RM-103TEが掲載されました。</a></li>
							</ul>
							<h5>アーカイブ</h5>
							<ul class="list-title archive">
								<li><a href="">2021年5月</a></li>
								<li><a href="">2021年4月</a></li>
								<li><a href="">2021年3月</a></li>
								<li><a href="">2021年2月</a></li>
								<li><a href="">2021年1月</a></li>
								<li><a href="">2020年12月</a></li>
								<li><a href="">2020年11月</a></li>
								<li><a href="">2020年10月</a></li>
								<li><a href="">2020年9月</a></li>
								<li><a href="">2020年8月</a></li>
								<li><a href="">2020年7月</a></li>
								<li><a href="">2020年6月</a></li>
								<li><a href="">2020年5月</a></li>
								<li><a href="">2020年4月</a></li>
								<li><a href="">2020年3月</a></li>
								<li><a href="">2020年2月</a></li>
								<li><a href="">2020年1月</a></li>
								<li><a href="">2019年12月</a></li>
								<li><a href="">2019年11月</a></li>
								<li><a href="">2019年10月</a></li>
								<li><a href="">2019年9月</a></li>
							</ul>
					</div>
					
				</div>
			</div>
		</div>
		
		<?php //include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/companents/pagination.php'; ?>
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

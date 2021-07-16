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
	<li>お問い合わせ</li>
</ul>

<main class="main-contents">
	
	<div class="container content__page  fx_ctxt media--guide">
		<h1 class="text-center">お問い合わせ</h1>

		<div class="content max-content">
            <div class="box-contact">
                <div class="step-contact">
                    <ul>
                        <li>
                            <div class="item-step text-center">
                                <div class="numb active">1</div>
                                <p>問い合わせ内容入力</p>
                            </div>
                        </li>
                        <li>
                            <div class="item-step text-center">
                                <div class="numb">2</div>
                                <p>内容確認</p>
                            </div>
                        </li>
                        <li>
                            <div class="item-step text-center">
                                <div class="numb">3</div>
                                <p>完了</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contact-info">
                	すべて必須項目になります。必ずご記入下さいますよう、お願いいたします。 <br>ご記入いただけない場合はお問い合わせフォームよりお問い合わせはいただけません。 <br>また、入力いただいた連絡先に誤りがありますとご連絡が取れませんのでご注意ください。
                </div>
                <div class="box-txt">
                    <p>必要事項をご入力の上、確認ボタンをクリックしてください。 </p>
                </div>
                <div class="form-contact max-content">
                    <form action="" id="form">
                        <div class="list-item-form">
                            <div class="item">
                                <div class="left">お問い合わせ区分<span>必須</span></div>
                                <div class="right op-cic">
                                    <ul>
                                        <li>
                                            <input type="radio" name="form-contact" value="企業様からのご相談" checked="" id="ct-1">
                                            <label for="ct-1">企業様からのご相談</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="form-contact" value="個人様からのご相談"  id="ct-2">
                                            <label for="ct-2">個人様からのご相談</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item">
                                <div class="left">お名前 <span>必須</span></div>
                                <div class="right"><input type="text" id="name" class="max-inp" placeholder="山田太郎"></div>
                            </div>

                            <div class="item">
                                <div class="left">お名前（ふりがな）<span>必須</span></div>
                                <div class="right"><input type="text" id="name" class="max-inp" placeholder="ヤマダタロウ"></div>
                            </div>

                            <div class="item">
                                <div class="left">会社・団体名</div>
                                <div class="right"><input type="text" id="name" class="max-inp" placeholder="株式会社テイスト"></div>
                            </div>

                            <div class="item">
                                <div class="left">メールアドレス <span>必須</span></div>
                                <div class="right"><input type="text" id="" class="max-inp" placeholder="test@gmail.com"></div>
                            </div>

                            <div class="item">
								<div class="left">お問い合わせ内容 <span>必須</span></div>
								<div class="right op-cic pb-3"><textarea name="" placeholder="入力して下さい" id="" cols="30" rows="10"></textarea>
									<span class="note">※製品のお問い合わせは製品名と型番の記載をお願い致します。</span>
								</div>
							</div>
                        </div>
                        <div class="box-text-scroll">
                            <div class="scrollbar" id="style-1">
                                <div class="force-overflow">
                                    <p>「お問合せフォーム」に関する個人情報の取扱いについて</p>
                                    <ul>
                                        <li>1. 個人情報取扱事業者の名称<br>ダイアモンドヘッド株式会社</li>
                                        <li>2. 個人情報保護管理者（代理人）<br>ダイアモンドヘッド株式会社<br>個人情報保護推進事務局長<br>電話　　０３－５８７６－４１６０<br>ＦＡＸ　０３－６８０９－４４１５</li>
                                        <li>3. 個人情報の利用目的 ホームページからお問合せいただきました際に入力いただいた個人情報につきましては、お問合せいただきました内容につきましてご連絡する際に利用いたします。</li>
                                        <li>4. 第三者提供について ホームページからお問合せいただきました際に入力いただいた個人情報につきましては、第三者へ提供することはございません。</li>
                                        <li>5. 個人情報の取扱いの委託について 本ホームページのＷＥＢサーバ及びメールサーバはレンタルサーバを利用しております。 <br>レンタルサーバ会社の選定は個人情報保護の観点ならびにJISQ15001:2006の要求事項から評価し選定して契約を交わしております。 <br>
                                        また、別途委託が必要となった場合には、上記と同様に選定し契約を行います。</li>
                                        <li>6. 個人情報利用目的の通知、個人情報の開示、訂正、追加又は削除、ならびに利用停止、第三者提供の停止について 取得した個人情報については、個人情報保護管理者が管理しています。 <br>お問合せいただきました際に入力いただいた個人情報の開示、訂正、追加又は削除、ならびに利用停止、第三者提供の停止をご請求される場合は、上記2の管理者にお申し出下さい。 <br>尚、そのときは本人確認をさせていただくことがございますので、身分証明書のご提示をお願いする場合があります。あらかじめご了承ください。</li>
                                        <li> 7. 本人が個人情報を与えることの任意性、及び当該情報を与えなかった場合に本人に 生じる結果 お預かりする個人情報の内容については任意と致しますが、当社が依頼する情報の提供がない場合、内容が正確でない場合は、 円滑なサービスのご提供やお問い合わせに対するご回答に支障をきたす可能性がございますのでご了承下さい。</li>
                                        <li>8. 本人が容易に認識できない方法による個人情報の取得について クッキーやウェブビーコン等を用いるなどして、本人が容易に認識できない方法による個人情報の取得は、行いません。</li>
                                        <li>9. 個人情報の安全管理措置について 取得した個人情報については、漏洩、滅失またはき損の防止と是正、その他個人情報の安全管理のために必要かつ適正な措置を講じます。 利用目的における個人情報の利用後、取得した個人情報は管理部において削除致します。</li>
                                </ul></div>
                            </div>
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="fruit1" name="fruit-1" value="remember">
                            <label for="fruit1">上記個人情報の取扱について同意します。</label>
                        </div>
                        <div class="btn-contact">
                            <button type="submit" class="path-bott">確認画面へ</button>
                        </div>
                    </form>
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

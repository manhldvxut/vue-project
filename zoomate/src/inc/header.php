<header class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 col-12">
				<div class="header__left">
					<ul>
						<li class="logo"><a href="/"><img src="/assets/images/logo-white.png" alt="ROOMMATE"></a></li>
						<li class="shoulder"><a href="/"><img src="/assets/images/shoulder.svg" alt="shoulder"></a></li>
					</ul>
					<div class="header__sp-right  only_sp">
						<div class="search">
							<button class="btn" data-bs-toggle="modal" data-bs-target="#search" type="button"><img src="/assets/images/search.svg" alt="search"></button>
						</div>
						<div class="icon-menu" @click="active = !active" :aria-pressed="active ? 'true' : 'false'">
					        <ul>
						        <li></li>
						        <li></li>
						        <li></li>
						        <li></li>
						        <li></li>
						        <li></li>
					      </ul>
					    </div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="header__right">
					<ul>
						<li><a href="">すべての製品</a></li>
						<li><a href="">家事家電</a></li>
						<li><a href="">季節家電</a></li>
						<li><a href="">カー用品</a></li>
						<li><a href="">雑貨</a></li>
						<li><a href="">理美容</a></li>
						<li><a href="">AV家電</a></li>
					</ul>
					<div class="search">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#search" type="button"><img src="/assets/images/search.svg" alt="search"></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="menu__sp" :class="{ show: active }">
		<ul class="menu__sp-head d-flex">
			<li>
				<div class="search__input">
            		<input type="search" name="" placeholder="何かお探しですか？">
            		<button><img src="/assets/images/search.svg"></button>
            	</div>
			</li>
			<li class="close_nav" @click="active = !active" :aria-pressed="active ? 'true' : 'false'">
				<img src="/assets/images/close.svg">
				<span>閉じる</span>
			</li>
		</ul>
		<ul class="menu__sp--item">
			<li><a  href="">すべての製品</a></li>
		</ul>
		<p class="catelog">カテゴリから探す</p>
		<ul class="menu__sp--item">
			<li><a  href="">家事家電</a></li>
			<li><a  href="">季節家電</a></li>
			<li><a  href="">カー用品</a></li>
			<li><a  href="">雑貨</a></li>
			<li><a  href="">理美容</a></li>
			<li><a  href="">AV家電</a></li>
		</ul>
		<ul class="menu__sp--item_foot">
			<li><a  href="">ご購入方法(個人様)</a></li>
			<li><a  href="">新規お取引(企業様)</a></li>
			<li><a  href="">メディア掲載のご依頼</a></li>
			<li><a  href="">取扱説明書ダウンロード</a></li>
			<li><a  href="">お知らせ</a></li>
			<li><a  href="">会社概要</a></li>
			<li><a  href="">お問い合わせ</a></li>
		</ul>
	</div>


</header>
<!-- modal-search -->
<div class="head_modal modal fade" id="search" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            	<div class="search__input">
            		<input type="search" name="" placeholder="何かお探しですか？">
            		<button><img src="/assets/images/search.svg"></button>
            	</div>
            	<div class="btn_click">
            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">閉じる</button>
            	</div>
            </div>
        </div>
    </div>
</div>
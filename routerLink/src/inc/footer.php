<footer class="footer">
	<div class="container-fluid">
		<div class="row footer__box">
			<div class="col-sm-12 col-md-12 col-lg-3 footer__left " >
				<div class="footer__body hidden" v-infocus="'showElement'">
					<p class="tit_top"><img src="/assets/images/footshoulder.svg"></p>
					<p class="logo"><a href="/"><img src="/assets/images/logo.png"></a></p>
					<p class="copyright">© Diamond head Co.,Ltd.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-9 footer__right " >
				<div class="footer__body">
					<ul class="hidden" v-infocus="'showElement'">
						<li v-for="(headerNavItem, index) in headerNav" v-bind:key = "index" v-if="index == 0">
							<a :href="headerNavItem.link">{{headerNavItem.navItem}}</a>
						</li>
						<li><a href="/products/調理家電/">調理家電</a></li>
						<li v-for="(headerNavItem, index) in headerNav" v-bind:key = "index" v-if="index > 0">
							<a :href="headerNavItem.link">{{headerNavItem.navItem}}</a>
						</li>
					</ul>
					<ul class="hidden" v-infocus="'showElement'">
						<li v-for="(footerNav02Item, index) in footerNav02" v-bind:key = "index">
							<a :href="footerNav02Item.link">{{footerNav02Item.navItem}}</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
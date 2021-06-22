
<section class="other__footer">
	<div class="container-fluid">
		<!-- <div class="row">
			<div class="col-md-3 other__footer-boder" v-for="(item, index) in items" v-bind:key = "index">
				<a :href="item.link" class="other__footer-item">
					<div class="hover_scale"><img v-bind:src="'/assets/images/' + item.image" :alt="item.h3"></div>
					<h3>{{item.h3}}</h3>
					<p>{{item.info}}</p>
				</a>
			</div>
		</div> -->
        <div class="row">
            <div class="col-md-3 other__footer-boder"><a href="/buying-guide/" class="other__footer-item">
                    <div class="hover_scale"><img src="/assets/images/icon-buy.svg" alt="BUYING GUIDE"></div>
                    <div class="sp-block">
                        <h3>BUYING GUIDE</h3>
                        <p>ご購入方法(個人様)</p>
                    </div>
                </a></div>
            <div class="col-md-3 other__footer-boder"><a href="/partner-guide/" class="other__footer-item">
                    <div class="hover_scale"><img src="/assets/images/icon-partner.svg" alt="PARTNER GUIDE"></div>
                    <div class="sp-block">
                        <h3>PARTNER GUIDE</h3>
                        <p>新規お取引(企業様)</p>
                    </div>
                </a></div>
            <div class="col-md-3 other__footer-boder"><a href="/media-guide/" class="other__footer-item">
                    <div class="hover_scale"><img src="/assets/images/icon-media.svg" alt="MEDIA"></div>
                    <div class="sp-block">
                        <h3>MEDIA</h3>
                        <p>メディア掲載のご依頼</p>
                    </div>
                </a></div>
            <div class="col-md-3 other__footer-boder"><a href="/contact/" class="other__footer-item">
                    <div class="hover_scale"><img src="/assets/images/icon-contact.svg" alt="CONTACT"></div>
                    <div class="sp-block">
                        <h3>CONTACT</h3>
                        <p>製品に関するお問い合わせ</p>
                    </div>
                </a></div>
        </div>
	</div>
</section>


<!--  <script>
    new Vue({
        el: '.other__footer',
        data: {
            items: [
            	{
            		h3: "BUYING GUIDE",
            		info:  "ご購入方法(個人様)",
            		link: "/",
            		image: "icon-buy.svg"
            	},
            	{
            		h3: "PARTNER GUIDE",
            		info:  "新規お取引(企業様)",
            		link: "/",
            		image: "icon-partner.svg"
            	},
            	{
            		h3: "MEDIA",
            		info:  "メディア掲載のご依頼",
            		link: "/",
            		image: "icon-media.svg"
            	},
            	{
            		h3: "CONTACT",
            		info:  "製品に関するお問い合わせ",
            		link: "/contact/",
            		image: "icon-contact.svg"
            	}
            ]
        }
    })
</script> -->
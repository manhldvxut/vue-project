<header class="header" id="Header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 col-12">
				<div class="header__left">
					<h1 v-if = " CurrentPath == '/' || CurrentPath == 'index.php' || CurrentPath == 'index' || CurrentPath == '/index.php' ">
						<ul>
							<li class="logo"><a href="/"><img src="/assets/images/logo-white.png" alt="ROOMMATE"></a></li>
							<li class="shoulder"><a href="/"><img src="/assets/images/shoulder.svg" alt="shoulder"></a></li>
						</ul>
					</h1>
					<h2 v-else>
						<ul>
							<li class="logo"><a href="/"><img src="/assets/images/logo.png" alt="ROOMMATE"></a></li>
							<!-- <li class="shoulder"><a href="/"><img src="/assets/images/shoulder.svg" alt="shoulder"></a></li> -->
						</ul>
					</h2>
					<div class="header__sp-right  only_sp">
						<div class="search">
							<button class="btn" data-bs-toggle="modal" data-bs-target="#search" type="button"><img src="/assets/images/search.svg" alt="search"></button>
						</div>
						<div class="icon-menu" @click="active = !active" :aria-pressed="active ? 'true' : 'false'">
					        <ul>
						        <li v-for="(li, index) in 6"></li>
					      </ul>
					    </div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="header__right">
					<ul>
						<li v-for="(headerNavItem, index) in headerNav" v-bind:key = "index">
							<a :href="headerNavItem.link">{{headerNavItem.navItem}}</a>
						</li>
					</ul>
					<div class="search">
						<button  class="btn" data-bs-toggle="modal" data-bs-target="#search" type="button">
							<img src="/assets/images/search.svg" alt="search" v-if = " CurrentPath == '/' || CurrentPath == 'index.php' || CurrentPath == 'index' || CurrentPath == '/index.php' ">
							<img src="/assets/images/search-black.svg" alt="search" v-else>
						</button>
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
			<li v-for="(headerNavItem, index) in headerNav" v-bind:key = "index" v-if="index == 0">
				<a :href="headerNavItem.link">{{headerNavItem.navItem}}</a>
			</li>
		</ul>
		<p class="catelog">カテゴリから探す</p>
		<ul class="menu__sp--item">
			<li v-for="(headerNavItem, index) in headerNav" v-bind:key = "index" v-if="index > 0">
				<a :href="headerNavItem.link">{{headerNavItem.navItem}}</a>
			</li>
		</ul>
		<ul class="menu__sp--item_foot">
			<li  v-for="(footerNav02Item, index) in footerNav02" v-bind:key = "index">
				<a :href="footerNav02Item.link">{{footerNav02Item.navItem}}</a>
			</li>
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

<!-- check router -->
<div class="d-none">
	<h1 v-if = " CurrentPath == '/' || CurrentPath == 'index.php' || CurrentPath == 'index' || CurrentPath == '/index.php' " >{{checkRouter()}}	{{CurrentPath}} index</h1>
	<h2 v-else>{{checkRouter()}}{{CurrentPath}} Other page</h2>
</div>
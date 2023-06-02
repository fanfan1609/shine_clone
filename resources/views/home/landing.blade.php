@extends('common.layout')

@section('css')
<link rel="stylesheet" href="/css/index.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/trustindex-google-widget.css" type="text/css"
    media="all">
@endsection

@section('content')
<div id="body_wrap"
		class="home page-template-default page page-id-397 -index-off -sidebar-off -frame-off top id_397">
		<div id="sp_menu" class="p-spMenu -left">
			<div class="p-spMenu__inner">
				<div class="p-spMenu__closeBtn">
					<button class="c-iconBtn -menuBtn c-plainBtn" data-onclick="toggleMenu" aria-label="メニューを閉じる">
						<i class="c-iconBtn__icon icon-close-thin"></i>
					</button>
				</div>
				<div class="p-spMenu__body">
					<div class="c-widget__title -spmenu">
						MENU </div>
					<div class="p-spMenu__nav">
						<ul class="c-spnav c-listMenu">
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a
									href="https://shine-yoshiki.com/concept/">CONCEPT<span
										class="c-smallNavTitle desc">SHINEについて</span></a></li>
							<li
								class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-431">
								<a href="https://shine-yoshiki.com#service" aria-current="page">SERVICE<span
										class="c-smallNavTitle desc">SHINEの特徴</span></a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-432"><a
									href="https://shine-yoshiki.com/price/">PRICE MENU<span
										class="c-smallNavTitle desc">料金・メニュー</span></a></li>
							<li
								class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-433">
								<a href="https://shine-yoshiki.com/#bf" aria-current="page">VOICE<span
										class="c-smallNavTitle desc">お客様の声</span></a>
								<ul class="sub-menu">
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-443"><a
											href="https://shine-yoshiki.com/beforeafter/">ビフォーアフター</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a
											href="https://shine-yoshiki.com/kuchikomi/">ご利用者様の声</a></li>
								</ul>
							</li>
							<li
								class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-435">
								<a href="https://shine-yoshiki.com/#locations" aria-current="page">LOCATIONS<span
										class="c-smallNavTitle desc">店舗情報</span></a>
								<ul class="sub-menu">
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a
											href="https://shine-yoshiki.com/kashiwa/">SHINE柏店</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-445"><a
											href="https://shine-yoshiki.com/h-ushiku/">SHINE牛久店</a></li>
								</ul>
							</li>
							<li
								class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-434">
								<a href="https://shine-yoshiki.com/#qa" aria-current="page">Q&A<span
										class="c-smallNavTitle desc">よくある質問</span></a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a
									href="https://shine-yoshiki.com/contact/">TRIAL<span
										class="c-smallNavTitle desc">体験申し込み</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="p-spMenu__overlay c-overlay" data-onclick="toggleMenu"></div>
		</div>
		<header id="header" class="l-header -series -series-right -transparent -t-000" data-spfix="1">
			<div class="l-header__inner l-container">
				<div class="l-header__logo">
					<h1 class="c-headLogo -img"><a href="https://shine-yoshiki.com/" title="SHINE（シャイン）"
							class="c-headLogo__link" rel="home"><img width="600" height="266" src="images/shinerogo.png"
								alt="SHINE（シャイン）" class="c-headLogo__img -top"
								srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w"
								sizes="(max-width: 959px) 50vw, 800px" decoding="async" loading="eager"><img
								aria-hidden="true" width="600" height="266" src="images/shinerogo.png" alt
								class="c-headLogo__img -common"
								srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w"
								sizes="(max-width: 959px) 50vw, 800px" loading="lazy"></a></h1>
				</div>
				<nav id="gnav" class="l-header__gnav c-gnavWrap">
					<ul class="c-gnav">
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a
								href="https://shine-yoshiki.com/concept/"><span class="ttl">CONCEPT</span><span
									class="c-smallNavTitle desc">SHINEについて</span></a></li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-431">
							<a href="https://shine-yoshiki.com#service" aria-current="page"><span
									class="ttl">SERVICE</span><span class="c-smallNavTitle desc">SHINEの特徴</span></a>
						</li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-432"><a
								href="https://shine-yoshiki.com/price/"><span class="ttl">PRICE MENU</span><span
									class="c-smallNavTitle desc">料金・メニュー</span></a></li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-433">
							<a href="https://shine-yoshiki.com/#bf" aria-current="page"><span
									class="ttl">VOICE</span><span class="c-smallNavTitle desc">お客様の声</span></a>
							<ul class="sub-menu">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-443"><a
										href="https://shine-yoshiki.com/beforeafter/"><span
											class="ttl">ビフォーアフター</span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a
										href="https://shine-yoshiki.com/kuchikomi/"><span class="ttl">ご利用者様の声</span></a>
								</li>
							</ul>
						</li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-435">
							<a href="https://shine-yoshiki.com/#locations" aria-current="page"><span
									class="ttl">LOCATIONS</span><span class="c-smallNavTitle desc">店舗情報</span></a>
							<ul class="sub-menu">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a
										href="https://shine-yoshiki.com/kashiwa/"><span class="ttl">SHINE柏店</span></a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-445"><a
										href="https://shine-yoshiki.com/h-ushiku/"><span class="ttl">SHINE牛久店</span></a>
								</li>
							</ul>
						</li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-434">
							<a href="https://shine-yoshiki.com/#qa" aria-current="page"><span
									class="ttl">Q&A</span><span class="c-smallNavTitle desc">よくある質問</span></a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a
								href="https://shine-yoshiki.com/contact/"><span class="ttl">TRIAL</span><span
									class="c-smallNavTitle desc">体験申し込み</span></a></li>
					</ul>
				</nav>
				<div class="l-header__customBtn sp_">
				</div>
				<div class="l-header__menuBtn sp_">
					<button class="c-iconBtn -menuBtn c-plainBtn" data-onclick="toggleMenu" aria-label="メニューボタン">
						<i class="c-iconBtn__icon icon-menu-thin"></i>
					</button>
				</div>
			</div>
		</header>
		<div id="fix_header" class="l-fixHeader -series -series-right -transparent -t-000">
			<div class="l-fixHeader__inner l-container">
				<div class="l-fixHeader__logo">
					<div class="c-headLogo -img"><a href="https://shine-yoshiki.com/" title="SHINE（シャイン）"
							class="c-headLogo__link" rel="home"><img width="600" height="266" src="images/shinerogo.png"
								alt="SHINE（シャイン）" class="c-headLogo__img -top"
								srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w"
								sizes="(max-width: 959px) 50vw, 800px" decoding="async" loading="eager"><img
								aria-hidden="true" width="600" height="266" src="images/shinerogo.png" alt
								class="c-headLogo__img -common"
								srcset="images/shinerogo.png 600w, images/shinerogo-300x133.png 300w"
								sizes="(max-width: 959px) 50vw, 800px" loading="lazy"></a></div>
				</div>
				<div class="l-fixHeader__gnav c-gnavWrap">
					<ul class="c-gnav">
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a
								href="https://shine-yoshiki.com/concept/"><span class="ttl">CONCEPT</span><span
									class="c-smallNavTitle desc">SHINEについて</span></a></li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-431">
							<a href="https://shine-yoshiki.com#service" aria-current="page"><span
									class="ttl">SERVICE</span><span class="c-smallNavTitle desc">SHINEの特徴</span></a>
						</li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-432"><a
								href="https://shine-yoshiki.com/price/"><span class="ttl">PRICE MENU</span><span
									class="c-smallNavTitle desc">料金・メニュー</span></a></li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-433">
							<a href="https://shine-yoshiki.com/#bf" aria-current="page"><span
									class="ttl">VOICE</span><span class="c-smallNavTitle desc">お客様の声</span></a>
							<ul class="sub-menu">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-443"><a
										href="https://shine-yoshiki.com/beforeafter/"><span
											class="ttl">ビフォーアフター</span></a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a
										href="https://shine-yoshiki.com/kuchikomi/"><span class="ttl">ご利用者様の声</span></a>
								</li>
							</ul>
						</li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-435">
							<a href="https://shine-yoshiki.com/#locations" aria-current="page"><span
									class="ttl">LOCATIONS</span><span class="c-smallNavTitle desc">店舗情報</span></a>
							<ul class="sub-menu">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a
										href="https://shine-yoshiki.com/kashiwa/"><span class="ttl">SHINE柏店</span></a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-445"><a
										href="https://shine-yoshiki.com/h-ushiku/"><span class="ttl">SHINE牛久店</span></a>
								</li>
							</ul>
						</li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-434">
							<a href="https://shine-yoshiki.com/#qa" aria-current="page"><span
									class="ttl">Q&A</span><span class="c-smallNavTitle desc">よくある質問</span></a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-436"><a
								href="https://shine-yoshiki.com/contact/"><span class="ttl">TRIAL</span><span
									class="c-smallNavTitle desc">体験申し込み</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="main_visual" class="p-mainVisual -type-single -height-img">
			<div class="p-mainVisual__inner">

				<div class="p-mainVisual__slide c-filterLayer -nofilter">
					<picture class="p-mainVisual__imgLayer c-filterLayer__img">
						<source width="1200" height="1240" media="(max-width: 959px)" sizes="100vw"
							srcset="images/sp_kv_W1200-1.jpg 1200w, images/sp_kv_W1200-1-290x300.jpg 290w, images/sp_kv_W1200-1-991x1024.jpg 991w, images/sp_kv_W1200-1-768x794.jpg 768w">
						<img width="1900" height="1120" src="images/pc_kv_W1900-1.jpg" alt class="p-mainVisual__img"
							srcset="images/pc_kv_W1900-1.jpg 1900w, images/pc_kv_W1900-1-300x177.jpg 300w, images/pc_kv_W1900-1-1024x604.jpg 1024w, images/pc_kv_W1900-1-768x453.jpg 768w, images/pc_kv_W1900-1-1536x905.jpg 1536w"
							sizes="(max-width: 1900px) 100vw, 1900px" decoding="async"> </picture>
					<div class="p-mainVisual__textLayer l-parent l-container u-ta-r"
						style="color:#000000;text-shadow:1px 1px 0px rgba(0, 0, 0, 0.2 )">
					</div>
				</div>
			</div>
		</div>
		<div id="content" class="l-content l-container" data-postid="397">
			<main id="main_content" class="l-mainContent l-article">
				<div class="l-mainContent__inner">
					<div class="post_content">

						<div class="swell-block-fullWide pc-py-0 sp-py-0 alignfull" style="background-color:#f7f7f7">
							<div class="swell-block-fullWide__inner">
								<figure class="wp-block-image alignwide size-full pc_only"><img decoding="async"
										width="4800" height="2652"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/pc_img_02@2x-3.png"
										alt class="wp-image-526 lazyload"
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/pc_img_02@2x-3.png 4800w, https://shine-yoshiki.com/wp-content/uploads/2023/04/pc_img_02@2x-3-300x166.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/pc_img_02@2x-3-1024x566.png 1024w, https://shine-yoshiki.com/wp-content/uploads/2023/04/pc_img_02@2x-3-768x424.png 768w, https://shine-yoshiki.com/wp-content/uploads/2023/04/pc_img_02@2x-3-1536x849.png 1536w, https://shine-yoshiki.com/wp-content/uploads/2023/04/pc_img_02@2x-3-2048x1132.png 2048w"
										sizes="(max-width: 4800px) 100vw, 4800px"
										data-aspectratio="4800/2652"><noscript><img decoding="async" width="4800"
											height="2652" src="images/pc_img_02%402x-3.png" alt class="wp-image-526"
											srcset="images/pc_img_02%402x-3.png 4800w, images/pc_img_02%402x-3-300x166.png 300w, images/pc_img_02%402x-3-1024x566.png 1024w, images/pc_img_02%402x-3-768x424.png 768w, images/pc_img_02%402x-3-1536x849.png 1536w, images/pc_img_02%402x-3-2048x1132.png 2048w"
											sizes="(max-width: 4800px) 100vw, 4800px"></noscript></figure>



								<figure class="wp-block-image alignwide size-full sp_only"><img decoding="async"
										width="1200" height="1335"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/sp_img_02.jpg"
										alt class="wp-image-508 lazyload"
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/sp_img_02.jpg 1200w, https://shine-yoshiki.com/wp-content/uploads/2023/04/sp_img_02-270x300.jpg 270w, https://shine-yoshiki.com/wp-content/uploads/2023/04/sp_img_02-920x1024.jpg 920w, https://shine-yoshiki.com/wp-content/uploads/2023/04/sp_img_02-768x854.jpg 768w"
										sizes="(max-width: 1200px) 100vw, 1200px"
										data-aspectratio="1200/1335"><noscript><img decoding="async" width="1200"
											height="1335" src="images/sp_img_02.jpg" alt class="wp-image-508"
											srcset="images/sp_img_02.jpg 1200w, images/sp_img_02-270x300.jpg 270w, images/sp_img_02-920x1024.jpg 920w, images/sp_img_02-768x854.jpg 768w"
											sizes="(max-width: 1200px) 100vw, 1200px"></noscript></figure>
							</div>
						</div>



						<div class="swell-block-fullWide pc-py-20 sp-py-20 alignfull" style="background-color:#ffffff">
							<div class="swell-block-fullWide__inner l-container">
								<div class="swell-block-button red_ animated fadeIn is-style-btn_normal"><a
										href="https://shine-yoshiki.com/contact/" target="_blank"
										rel="noopener noreferrer"
										class="swell-block-button__link"><span>体験申し込みはこちら</span></a></div>
							</div>
						</div>



						<div class="swell-block-fullWide pc-py-60 sp-py-40 has-bg-img -fixbg alignfull lazyload"
							style="background-color:rgba(255, 255, 255, 0.69)"
							data-bg="https://shine-yoshiki.com/wp-content/uploads/2023/04/shine-haikei.png">
							<div class="swell-block-fullWide__inner l-container">
								<h2 class="wp-block-heading has-text-align-center animated fadeInUp"><img
										decoding="async" width="900" height="400" class="wp-image-530 lazyload"
										style="width: 450px;"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/1.png"
										alt="完全個室パーソナルジムSHINE（シャイン）コンセプト"
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/1.png 900w, https://shine-yoshiki.com/wp-content/uploads/2023/04/1-300x133.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/1-768x341.png 768w"
										sizes="(max-width: 900px) 100vw, 900px"><noscript><img decoding="async"
											width="900" height="400" class="wp-image-530" style="width: 450px;"
											src="images/1.png" alt="完全個室パーソナルジムSHINE（シャイン）コンセプト"
											srcset="images/1.png 900w, images/1-300x133.png 300w, images/1-768x341.png 768w"
											sizes="(max-width: 900px) 100vw, 900px"></noscript></h2>



								<div class="wp-block-group animated fadeInUp is-layout-constrained">
									<div class="wp-block-group__inner-container">
										<p class="has-text-align-left sp_only"><strong><span
													class="swl-fz u-fz-l">「本物」をご提供する、完全個室</span></strong>・<strong><span
													class="swl-fz u-fz-l">トレーナー専任パーソナルジム</span></strong><br><br>1対1で真剣に向き合うSHINE(シャイン）だからこそできる、あなたに寄り添ったトレーニングで「リバウンドしないカラダ」へ導きます
										</p>



										<p class="has-text-align-center pc_only u-mb-ctrl u-mb-50"><strong><span
													class="swl-fz u-fz-l">「本物」をご提供する、<br>完全個室・トレーナー専任パーソナルジム<br></span><br></strong>1対1で真剣に向き合うSHINE(シャイン）だからこそできる、<br>あなたに寄り添ったトレーニングで「リバウンドしないカラダ」へ導きます
										</p>
									</div>
								</div>



								<div class="swell-block-button red_ is-style-btn_normal animated fadeInUp"><a
										href="https://shine-yoshiki.com/concept/" target="_blank"
										rel="noopener noreferrer"
										class="swell-block-button__link"><span>詳しく見る</span></a></div>
							</div>
						</div>



						<div class="swell-block-fullWide pc-py-60 sp-py-40 alignfull">
							<div class="swell-block-fullWide__inner l-container">
								<div style="height:1px" aria-hidden="true" id="service" class="wp-block-spacer"></div>



								<figure class="wp-block-image size-full is-resized animated fadeInUp" id="service"><img
										decoding="async"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/2.png"
										alt="完全個室パーソナルジムSHINE（シャイン)サービス" class="wp-image-531 lazyload" width="450"
										height="200" title
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/2.png 900w, https://shine-yoshiki.com/wp-content/uploads/2023/04/2-300x133.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/2-768x341.png 768w"
										sizes="(max-width: 450px) 100vw, 450px"
										data-aspectratio="450/200"><noscript><img decoding="async" src="images/2.png"
											alt="完全個室パーソナルジムSHINE（シャイン)サービス" class="wp-image-531" width="450"
											height="200" title
											srcset="images/2.png 900w, images/2-300x133.png 300w, images/2-768x341.png 768w"
											sizes="(max-width: 450px) 100vw, 450px"></noscript></figure>



								<div class="swell-block-columns" style="--clmn-w--pc:33.33%">
									<div class="swell-block-columns__inner">
										<div class="swell-block-column swl-has-mb--s animated fadeIn slower">
											<div class="wp-block-group has-background is-layout-constrained"
												style="background:linear-gradient(135deg,rgb(238,238,238) 50%,rgb(254,254,254) 100%)">
												<div class="wp-block-group__inner-container">
													<figure class="wp-block-image size-full is-style-default"><img
															decoding="async" width="600" height="600"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/11.png"
															alt class="wp-image-563 lazyload"
															data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/11.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/11-300x300.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/11-150x150.png 150w"
															sizes="(max-width: 600px) 100vw, 600px"
															data-aspectratio="600/600"><noscript><img decoding="async"
																width="600" height="600" src="images/11.png" alt
																class="wp-image-563"
																srcset="images/11.png 600w, images/11-300x300.png 300w, images/11-150x150.png 150w"
																sizes="(max-width: 600px) 100vw, 600px"></noscript>
													</figure>



													<p class="has-text-align-center"><strong>完全個室プライベートジム</strong></p>



													<p>SHINEは全室完全個室のパーソナルトレーニングジム。あなただけの空間で、周囲を気にすることなく効率よくトレーニングに取り組むことができる環境です。
													</p>
												</div>
											</div>
										</div>



										<div class="swell-block-column swl-has-mb--s">
											<div class="wp-block-group animated fadeIn slower has-background is-layout-constrained"
												style="background:linear-gradient(135deg,rgb(238,238,238) 50%,rgb(255,255,255) 100%)">
												<div class="wp-block-group__inner-container">
													<figure class="wp-block-image size-full is-style-default"><img
															decoding="async" width="600" height="600"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/16.png"
															alt class="wp-image-568 lazyload"
															data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/16.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/16-300x300.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/16-150x150.png 150w"
															sizes="(max-width: 600px) 100vw, 600px"
															data-aspectratio="600/600"><noscript><img decoding="async"
																width="600" height="600" src="images/16.png" alt
																class="wp-image-568"
																srcset="images/16.png 600w, images/16-300x300.png 300w, images/16-150x150.png 150w"
																sizes="(max-width: 600px) 100vw, 600px"></noscript>
													</figure>



													<p class="has-text-align-center"><strong>有効期限なし回数券方式</strong></p>



													<p>無理ない自分にあったペースで通うことができる回数券方式。有効期限もないので、生活状況やスケジュールに合わせてご利用ペースのコントロールができます。
													</p>
												</div>
											</div>
										</div>



										<div class="swell-block-column swl-has-mb--s">
											<div class="wp-block-group animated fadeIn slower has-background is-layout-constrained"
												style="background:linear-gradient(135deg,rgb(238,238,238) 52%,rgb(255,255,255) 100%)">
												<div class="wp-block-group__inner-container">
													<figure class="wp-block-image size-full is-style-rounded"><img
															decoding="async" width="600" height="600"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/13.png"
															alt class="wp-image-565 lazyload"
															data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/13.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/13-300x300.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/13-150x150.png 150w"
															sizes="(max-width: 600px) 100vw, 600px"
															data-aspectratio="600/600"><noscript><img decoding="async"
																width="600" height="600" src="images/13.png" alt
																class="wp-image-565"
																srcset="images/13.png 600w, images/13-300x300.png 300w, images/13-150x150.png 150w"
																sizes="(max-width: 600px) 100vw, 600px"></noscript>
													</figure>



													<p class="has-text-align-center"><strong>専任トレーナーがサポート</strong></p>



													<p>あなたの専任トレーナーがトレーニングを徹底サポート。目標のカラダになれるよう、あなたにあったトレーニングを、全力で寄り添いお伝えしていきます。
													</p>
												</div>
											</div>
										</div>



										<div class="swell-block-column swl-has-mb--s">
											<div class="wp-block-group animated fadeIn slower has-background is-layout-constrained"
												style="background:linear-gradient(135deg,rgb(238,238,238) 54%,rgb(255,255,255) 100%)">
												<div class="wp-block-group__inner-container">
													<figure class="wp-block-image size-full is-style-rounded"><img
															decoding="async" width="600" height="600"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/15.png"
															alt class="wp-image-567 lazyload"
															data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/15.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/15-300x300.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/15-150x150.png 150w"
															sizes="(max-width: 600px) 100vw, 600px"
															data-aspectratio="600/600"><noscript><img decoding="async"
																width="600" height="600" src="images/15.png" alt
																class="wp-image-567"
																srcset="images/15.png 600w, images/15-300x300.png 300w, images/15-150x150.png 150w"
																sizes="(max-width: 600px) 100vw, 600px"></noscript>
													</figure>



													<p class="has-text-align-center"><strong>お水飲み放題</strong></p>



													<p>全室ウォーターサーバー完備。もちろんお水は飲みは放題ですので、荷物を気にすることなく、気軽に水分補給をしながらトレーニングいただけます。
													</p>
												</div>
											</div>
										</div>



										<div class="swell-block-column swl-has-mb--s">
											<div class="wp-block-group animated fadeIn slower has-background is-layout-constrained"
												style="background:linear-gradient(135deg,rgb(238,238,238) 52%,rgb(255,255,255) 100%)">
												<div class="wp-block-group__inner-container">
													<figure
														class="wp-block-image size-full is-resized is-style-rounded">
														<img decoding="async"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/12.png"
															alt class="wp-image-564 lazyload" width="600" height="600"
															data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/12.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/12-300x300.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/12-150x150.png 150w"
															sizes="(max-width: 600px) 100vw, 600px"
															data-aspectratio="600/600"><noscript><img decoding="async"
																src="images/12.png" alt class="wp-image-564" width="600"
																height="600"
																srcset="images/12.png 600w, images/12-300x300.png 300w, images/12-150x150.png 150w"
																sizes="(max-width: 600px) 100vw, 600px"></noscript>
													</figure>



													<p class="has-text-align-center"><strong>手ぶらでOK</strong></p>



													<p>仕事帰りや休日のお出かけついでに手ぶらでトレーニング。シューズ無料お預かり、レンタルウェアもご用意しておりますのでお荷物もコンパクトに。
													</p>
												</div>
											</div>
										</div>



										<div class="swell-block-column swl-has-mb--s">
											<div class="wp-block-group animated fadeIn slower has-background is-layout-constrained"
												style="background:linear-gradient(135deg,rgb(238,238,238) 53%,rgb(255,255,255) 100%)">
												<div class="wp-block-group__inner-container">
													<figure class="wp-block-image size-full is-style-rounded"><img
															decoding="async" width="600" height="600"
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
															data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/14.png"
															alt class="wp-image-566 lazyload"
															data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/14.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/14-300x300.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/14-150x150.png 150w"
															sizes="(max-width: 600px) 100vw, 600px"
															data-aspectratio="600/600"><noscript><img decoding="async"
																width="600" height="600" src="images/14.png" alt
																class="wp-image-566"
																srcset="images/14.png 600w, images/14-300x300.png 300w, images/14-150x150.png 150w"
																sizes="(max-width: 600px) 100vw, 600px"></noscript>
													</figure>



													<p class="has-text-align-center"><strong>プロテイン無料サービス</strong></p>



													<p>トレーニング後はタンパク質摂取で効果アップ。豊富なフレーバーからお選びいただける、プロテイン無料サービスをご用意しております。
													</p>
												</div>
											</div>
										</div>



										<div class="swell-block-column swl-has-mb--s">

										</div>
									</div>
								</div>



								<div class="swell-block-button red_ animated fadeIn is-style-btn_normal"><a
										href="https://shine-yoshiki.com/price/" target="_blank"
										rel="noopener noreferrer"
										class="swell-block-button__link"><span>メニュー・料金はこちら</span></a></div>



								<div style="height:1px" aria-hidden="true" id="bf" class="wp-block-spacer"></div>



								<figure class="wp-block-image size-full is-resized animated fadeInUp"><img
										decoding="async"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/3.png"
										alt="完全個室パーソナルジムSHINE（シャイン)ビフォーアフター" class="wp-image-532 lazyload" width="450"
										height="200"
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/3.png 900w, https://shine-yoshiki.com/wp-content/uploads/2023/04/3-300x133.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/3-768x341.png 768w"
										sizes="(max-width: 450px) 100vw, 450px"
										data-aspectratio="450/200"><noscript><img decoding="async" src="images/3.png"
											alt="完全個室パーソナルジムSHINE（シャイン)ビフォーアフター" class="wp-image-532" width="450"
											height="200"
											srcset="images/3.png 900w, images/3-300x133.png 300w, images/3-768x341.png 768w"
											sizes="(max-width: 450px) 100vw, 450px"></noscript></figure>



								<p class="has-text-align-center animated fadeInUp pc_only">
									１人ひとりに「パーソナライズされたトレーニング」だから<br>＼　　　　多くの人が理想のカラダを手に入れ人生を変えています　　　／</p>



								<p class="has-text-align-left animated fadeInUp sp_only">
									１人ひとりに「パーソナライズされたトレーニング」だから、多くの人が理想のカラダを手に入れ人生を変えています</p>



								<div class="wp-block-columns">
									<div class="wp-block-column">
										<figure
											class="wp-block-image size-full is-resized animated fadeInLeft is-style-shadow">
											<img decoding="async"
												src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
												data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/BF21.png"
												alt class="wp-image-900 lazyload" width="450" height="338"
												data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/BF21.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/BF21-300x225.png 300w"
												sizes="(max-width: 450px) 100vw, 450px"
												data-aspectratio="450/338"><noscript><img decoding="async"
													src="images/BF21.png" alt class="wp-image-900" width="450"
													height="338"
													srcset="images/BF21.png 600w, images/BF21-300x225.png 300w"
													sizes="(max-width: 450px) 100vw, 450px"></noscript></figure>
									</div>



									<div class="wp-block-column">
										<figure
											class="wp-block-image size-full is-resized animated fadeInRight is-style-shadow">
											<img decoding="async"
												src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
												data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/BF22.png"
												alt class="wp-image-899 lazyload" width="450" height="338"
												data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/BF22.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/BF22-300x225.png 300w"
												sizes="(max-width: 450px) 100vw, 450px"
												data-aspectratio="450/338"><noscript><img decoding="async"
													src="images/BF22.png" alt class="wp-image-899" width="450"
													height="338"
													srcset="images/BF22.png 600w, images/BF22-300x225.png 300w"
													sizes="(max-width: 450px) 100vw, 450px"></noscript></figure>
									</div>
								</div>



								<div class="swell-block-button red_ is-style-btn_normal animated fadeInUp"><a
										href="https://shine-yoshiki.com/beforeafter/" target="_blank"
										rel="noopener noreferrer"
										class="swell-block-button__link"><span>もっと見る</span></a></div>
							</div>
						</div>



						<div class="swell-block-fullWide pc-py-60 sp-py-40 has-bg-img -fixbg alignfull lazyload"
							data-bg="https://shine-yoshiki.com/wp-content/uploads/2023/04/C77B1ED6-1301-4388-ACEB-6D0C7F71689F-2.jpeg">
							<div class="swell-block-fullWide__inner l-article">
								<h2 class="wp-block-heading is-style-section_ttl"></h2>
							</div>
						</div>



						<div class="swell-block-fullWide pc-py-60 sp-py-40 has-bg-img -fixbg alignfull lazyload"
							style="background-color:rgba(255, 255, 255, 0.3)"
							data-bg="https://shine-yoshiki.com/wp-content/uploads/2023/04/haikei2.jpeg">
							<div class="swell-block-fullWide__inner l-container">
								<h2 class="wp-block-heading has-text-align-center animated fadeInUp u-mb-ctrl u-mb-0">
									<img decoding="async" width="900" height="400" class="wp-image-533 lazyload"
										style="width: 450px;"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/4.png"
										alt="完全個室パーソナルジムSHINE（シャイン)クチコミ"
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/4.png 900w, https://shine-yoshiki.com/wp-content/uploads/2023/04/4-300x133.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/4-768x341.png 768w"
										sizes="(max-width: 900px) 100vw, 900px"><noscript><img decoding="async"
											width="900" height="400" class="wp-image-533" style="width: 450px;"
											src="images/4.png" alt="完全個室パーソナルジムSHINE（シャイン)クチコミ"
											srcset="images/4.png 900w, images/4-300x133.png 300w, images/4-768x341.png 768w"
											sizes="(max-width: 900px) 100vw, 900px"></noscript></h2>



								<div class="wp-block-group animated fadeIn is-layout-constrained">
									<div class="wp-block-group__inner-container">
										<figure
											class="wp-block-image size-full is-resized u-mb-ctrl u-mb-0 animated fadeIn slower">
											<img decoding="async"
												src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
												data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/no1-2.png"
												alt class="wp-image-620 lazyload" width="400" height="200"
												data-aspectratio="400/200"><noscript><img decoding="async"
													src="images/no1-2.png" alt class="wp-image-620" width="400"
													height="200"></noscript></figure>


										<div class="ti-widget ti-goog" data-layout-id="4" data-set-id="drop-shadow"
											data-pid="b5167179c03e50ec942cb" data-pager-autoplay-timeout="6">
											<div class="ti-widget-container ti-col-3">
												<div class="ti-reviews-container">
													<div class="ti-controls">
														<div class="ti-next"></div>
														<div class="ti-prev"></div>
													</div>
													<div class="ti-reviews-container-wrapper">
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a/AGNmyxab_yh2q_Ep8zaLhvtaJleBpwMyAN4ZGMd3C-mA=s120-c-c-rp-w64-h64-mo-br100"
																			alt="Y Tera" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a/AGNmyxab_yh2q_Ep8zaLhvtaJleBpwMyAN4ZGMd3C-mA=s120-c-c-rp-w64-h64-mo-br100"
																				alt="Y Tera"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> Y Tera </div>
																		<div class="ti-date">2023-04-19</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->通い始めてから半年が経ちました。165cm、57kg→目標の49kgまで減量成功。これからボディメイクに入ります。

																	歳を重ねるに連れ、痩せることが困難になってきたので、YouTubeのトレーニング動画を見たり、ヨガをやってみたりと自分なりに色々と試してみたものの、中々モチベーションを保つことができず挫折の繰り返し。大手のジムに登録したところで三日坊主になることは予想できたので、少し痛い出費にはなるものの“パーソナルジム”でだらし無い自分を管理してもらおうと思い、こちらに辿り着きました。

																	普段はスーパーに買い物に行くくらいしか動いていなかったこともあり、筋肉らしい筋肉もなく、最初のトレーニングでは数回の動きだけで身体中が悲鳴をあげているような状態でした。でもやめようと思ったことは一度もありません。おそらく…見た目はキラキラ、中身はデビルと化したトレーナー（以下デビちゃん）のおかげだと思います。デビちゃんの言うことを聞いていると、ちゃんと結果がでます。辛いイメージの食事制限も、デビちゃんのおかげで上手く向き合うことができました。

																	食事の知識が増えたおかげで、体の内側からも変化が出始め、今では肌荒れが減り、髪質変化&髪の毛にハリも出てきました（美容師さんに言われました）。
																	“筋トレが何よりのアンチエイジング”ってデビちゃんに言われましたけど、ホントその通りでした。
																	このままデビちゃんの言う通りにしてたら理想の体型を手に入れられそうなので、最後までついていくことにします。
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a/AGNmyxa5XX-H11ntGhzQa7k6RJXjrZTsQMsAZSL6k1BB=s120-c-c-rp-w64-h64-mo-br100"
																			alt="もあ" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a/AGNmyxa5XX-H11ntGhzQa7k6RJXjrZTsQMsAZSL6k1BB=s120-c-c-rp-w64-h64-mo-br100"
																				alt="もあ"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> もあ </div>
																		<div class="ti-date">2023-04-19</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->個人の目的にあったトレーニング
																	また、プロの目から見た身体のバランスを見てくれ、理想の身体にしてくれます！
																	パーソナルトレーニングでは身体だけでなく、メンタルも鍛えれるのが棚ぼたでした！
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a/AGNmyxZEwoPAQXcuji0Gjq0EKVwcskqG_aZdm1Aya2dP=s120-c-c-rp-w64-h64-mo-br100"
																			alt="sakuya chan"
																			class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a/AGNmyxZEwoPAQXcuji0Gjq0EKVwcskqG_aZdm1Aya2dP=s120-c-c-rp-w64-h64-mo-br100"
																				alt="sakuya chan"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> sakuya chan </div>
																		<div class="ti-date">2023-04-18</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->知識が豊富で、効かせ方も励ましも上手なので毎回頑張れてます！
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a/AGNmyxaU4hnNghLMkavgiscnxmZK0MFFxusOBboDXxxC=s120-c-c-rp-w64-h64-mo-br100"
																			alt="ひ" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a/AGNmyxaU4hnNghLMkavgiscnxmZK0MFFxusOBboDXxxC=s120-c-c-rp-w64-h64-mo-br100"
																				alt="ひ"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> ひ </div>
																		<div class="ti-date">2023-04-13</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->代謝の悪さを感じ始めたので通い始めました。トレーナーさんが優しく丁寧にフォームや筋肉の使い方を教えてくださるので、初めてのパーソナルでしたが楽しく続けることが出来ています。トレーニングの間に楽しくお話したり、好きなアーティストの曲を流してくれるのできつくても頑張れています！
																	通い始めは続くか不安でしたが今は楽しくて継続を検討しています。はじめてパーソナルトレーニングを始める方にぜひおすすめしたいです！
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a-/ACB-R5QI9Q56neGWpBhlo5TxjZFsbwOndVje_tBTrSMzmw=s120-c-c-rp-w64-h64-mo-br100"
																			alt="is" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a-/ACB-R5QI9Q56neGWpBhlo5TxjZFsbwOndVje_tBTrSMzmw=s120-c-c-rp-w64-h64-mo-br100"
																				alt="is"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> is </div>
																		<div class="ti-date">2023-04-12</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->自粛中に自宅で筋トレなどに挑戦していましたが、ひとりでやると限界がきたらすぐ辞めたり、いつの間にか普通の生活に戻っているなど、全く続かず体重にも変化がありませんでした。

																	そんな時にSHINEさんを紹介してもらい、1度体験をしました。

																	1人でやるとキツくてやめてしまう場面でも、トレーナーさんの「頑張れ！」の一言で頑張れてしまうところや、できた時には「すごい！」と褒めて下さるところ、
																	今までだったらすぐ逃げ道作ってしまう私でも続けられているのは、SHINEさんのトレーナーさんの支えがあるからだと思います！

																	話すことが苦手で初めは緊張していましたが、トレーナーさんが気さくに話して下さって、楽しく話しながらもトレーニングができます！

																	食事面も管理して下さって体調にも気を使って下さって、日常生活で出来ることなども教えて下さって、一人ひとりに合ったトレーニングを提供してくれます。

																	一人ひとりに歩み寄ってくれる、自信を持って勧められるジムです！
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a/AGNmyxadBjEk0geuxL47Gn29HU-SOiqf-vj2oew9aYdY=s120-c-c-rp-w64-h64-mo-br100"
																			alt="小田慎一郎" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a/AGNmyxadBjEk0geuxL47Gn29HU-SOiqf-vj2oew9aYdY=s120-c-c-rp-w64-h64-mo-br100"
																				alt="小田慎一郎"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> 小田慎一郎 </div>
																		<div class="ti-date">2023-03-30</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->今まで、大きな体重の増加や減少はなかったのですが、去年1年で6キロ近く増加してしまいました。年齢も39歳に
																	なり、このままズルズル行きたくないと思い、ジムに行こうと決意しました。トレーニングの知識もないし、
																	それ以上の怪我をしたくないと思い
																	プロに教えてもらえる、
																	パーソナルジムに行こうと思いました。
																	入会して、まもなく3ヶ月になろうとしています。すでに4キロくらい、
																	体重が落ちてきました。運動不足も解消できるし、健康的だし、食事に関しても、特にストレスなく、日々過ごせています。食べる物、食べる量は変わりましが、割と好きな物を食べたりもしてます。
																	30代後半くらいからが、大きな分かれ道だと思います。
																	自分の健康面や体型、食生活に対して
																	不安に思ってたり、改善したいと思っている人なら、絶対おすすめです！
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a-/ACB-R5T2voFiKX8RWp7oj2t0H1t2HlNMZ43LqxaHYzW_6w=s120-c-c-rp-w64-h64-mo-br100"
																			alt="eri i" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a-/ACB-R5T2voFiKX8RWp7oj2t0H1t2HlNMZ43LqxaHYzW_6w=s120-c-c-rp-w64-h64-mo-br100"
																				alt="eri i"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> eri i </div>
																		<div class="ti-date">2023-03-28</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->コロナ自粛中にかなり太ってしまった為、パーソナルジムを探してSHINEさんに体験に行ってそのまま入会しました。
																	ジムには通っていたのですが、1人ではやる気が出なく痩せる気が全くしなかったのですが、トレーナーさんが食事を見てくれたり自分に合ったトレーニングをしてくださりすぐに結果が出ました。
																	2ヶ月半ですが、体重が−9kg、体脂肪が10％落ちて肩こりや腰痛も無くなり食生活も生活習慣も大幅に改善されてかなり健康的になりました！
																	教わった事をちゃんとすれば必ず結果が出るとても良いパーソナルジムだと思います。
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a-/ACB-R5Q81SFpPpsjkXltbe4wDid1DTHYCaxn4MYUg_fa=s120-c-c-rp-w64-h64-mo-br100"
																			alt="サカモトユリオ"
																			class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a-/ACB-R5Q81SFpPpsjkXltbe4wDid1DTHYCaxn4MYUg_fa=s120-c-c-rp-w64-h64-mo-br100"
																				alt="サカモトユリオ"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> サカモトユリオ </div>
																		<div class="ti-date">2023-03-25</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->体の動かし方から教えてくれるので
																	すごく通いやすいです
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a-/ACB-R5RvnhvTmh1XHin1Za3y-8prBpZXN-dD7X9fSSi8=s120-c-c-rp-w64-h64-mo-br100"
																			alt="いま" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a-/ACB-R5RvnhvTmh1XHin1Za3y-8prBpZXN-dD7X9fSSi8=s120-c-c-rp-w64-h64-mo-br100"
																				alt="いま"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> いま </div>
																		<div class="ti-date">2023-02-19</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->三日坊主の私が、SHINEさんに通ってから運動習慣が身につきました！

																	トレーニング中もたくさんの知識を教えていただいたり、いろんなお話をしてくれるのでとても勉強になりますし、なにより楽しく続けることができます。トレーナーさんもとても優しく、毎回わかりやすい指導をしていただき本当に感謝です。

																	これからも通いたいと思える素敵なパーソナルジムだと思います！
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
														<div data-empty="0" class="ti-review-item source-Google">
															<div class="ti-inner">
																<div class="ti-review-header">
																	<div class="ti-profile-img"> <img
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																			data-src="https://lh3.googleusercontent.com/a-/ACB-R5SUayGOGl4_g9V46CbW31yma3BSqkolKxMtjklPIA=s120-c-c-rp-w64-h64-mo-br100"
																			alt="K O" class="lazyload"><noscript><img
																				src="https://lh3.googleusercontent.com/a-/ACB-R5SUayGOGl4_g9V46CbW31yma3BSqkolKxMtjklPIA=s120-c-c-rp-w64-h64-mo-br100"
																				alt="K O"></noscript> </div>
																	<div class="ti-profile-details">
																		<div class="ti-name"> K O </div>
																		<div class="ti-date">2023-02-15</div>
																	</div>
																</div> <span class="ti-stars"><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span><span
																		class="ti-star f"></span></span>
																<div class="ti-review-content">
																	<!-- R-CONTENT -->20代後半男性です。

																	こちらのジムでお世話になる前はトレーニング完全初心者で、せっかく始めるなら正しい方法で取り組みたいと思い、評価の高いSHINEさんを選びました。

																	週２回ペースで通い始めて約3ヶ月経ちますが、徐々に体の変化も感じられとても充実しています。

																	私のようなトレーニング未経験者でも、確かな効果を実感し続けられているので、初心者の方にもとてもオススメ出来るジムです！
																	<!-- R-CONTENT -->
																</div> <span class="ti-read-more"
																	data-container=".ti-review-content"
																	data-collapse-text="隠れる"
																	data-open-text="続きを読む"></span>
															</div>
														</div>
													</div>
													<div class="ti-controls-dots">
														<div class="dot active"></div>
													</div>
												</div>
												<div class="ti-footer">
													<div class="ti-rating-text"> <span
															class="nowrap"><strong>Google</strong> 評価スコア: </span><span
															class="nowrap"><strong>5</strong>/5, </span><span
															class="nowrap"><strong>132 レビューに基づく</strong></span> </div>
												</div>
											</div>
										</div>
									</div>
								</div>



								<div class="swell-block-button red_ is-style-btn_normal"><a
										href="https://shine-yoshiki.com/kuchikomi/" target="_blank"
										rel="noopener noreferrer"
										class="swell-block-button__link"><span>クチコミをもっと見る</span></a></div>
							</div>
						</div>



						<div class="swell-block-fullWide pc-py-60 sp-py-40 has-bg-img -fixbg alignfull lazyload"
							style="background-color:rgba(255, 255, 255, 0.02)"
							data-bg="https://shine-yoshiki.com/wp-content/uploads/2023/04/bg.png">
							<div class="swell-block-fullWide__inner l-container">
								<div style="height:1px" aria-hidden="true" id="locations" class="wp-block-spacer"></div>



								<figure class="wp-block-image size-full is-resized animated fadeInUp"><img
										decoding="async"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/5.png"
										alt="完全個室パーソナルジムSHINE（シャイン)店舗一覧" class="wp-image-534 lazyload" width="450"
										height="200"
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/5.png 900w, https://shine-yoshiki.com/wp-content/uploads/2023/04/5-300x133.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/5-768x341.png 768w"
										sizes="(max-width: 450px) 100vw, 450px"
										data-aspectratio="450/200"><noscript><img decoding="async" src="images/5.png"
											alt="完全個室パーソナルジムSHINE（シャイン)店舗一覧" class="wp-image-534" width="450"
											height="200"
											srcset="images/5.png 900w, images/5-300x133.png 300w, images/5-768x341.png 768w"
											sizes="(max-width: 450px) 100vw, 450px"></noscript></figure>



								<div class="wp-block-columns border_gray">
									<div
										class="wp-block-column animated fadeInLeft has-white-background-color has-background">
										<div class="wp-block-columns">
											<div class="wp-block-column" style="flex-basis:50%">
												<figure class="wp-block-image size-full"><img decoding="async"
														width="600" height="338"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
														data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/naikan051.png"
														alt class="wp-image-885 lazyload"
														data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/naikan051.png 600w, https://shine-yoshiki.com/wp-content/uploads/2023/04/naikan051-300x169.png 300w"
														sizes="(max-width: 600px) 100vw, 600px"
														data-aspectratio="600/338"><noscript><img decoding="async"
															width="600" height="338" src="images/naikan051.png" alt
															class="wp-image-885"
															srcset="images/naikan051.png 600w, images/naikan051-300x169.png 300w"
															sizes="(max-width: 600px) 100vw, 600px"></noscript></figure>
											</div>



											<div class="wp-block-column is-vertically-aligned-center"
												style="flex-basis:50%">
												<p class="has-text-align-center"><strong>SHINE
														柏店</strong><br>千葉県柏市柏2丁目9-7<br>アルシェ柏<br>柏駅東口より徒歩5分</p>



												<div class="swell-block-button red_ is-style-btn_line"><a
														href="https://shine-yoshiki.com/kashiwa/" target="_blank"
														rel="noopener noreferrer"
														class="swell-block-button__link"><span>店舗詳細はこちら</span></a></div>
											</div>
										</div>
									</div>



									<div
										class="wp-block-column animated fadeInRight has-white-background-color has-background">
										<div class="wp-block-columns">
											<div class="wp-block-column" style="flex-basis:50%">
												<figure class="wp-block-image size-full"><img decoding="async"
														width="600" height="338"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
														data-src="https://shine-yoshiki.com/wp-content/uploads/2023/05/top-u2.jpg"
														alt class="wp-image-1549 lazyload"
														data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/05/top-u2.jpg 600w, https://shine-yoshiki.com/wp-content/uploads/2023/05/top-u2-300x169.jpg 300w"
														sizes="(max-width: 600px) 100vw, 600px"
														data-aspectratio="600/338"><noscript><img decoding="async"
															width="600" height="338" src="images/top-u2.jpg" alt
															class="wp-image-1549"
															srcset="images/top-u2.jpg 600w, images/top-u2-300x169.jpg 300w"
															sizes="(max-width: 600px) 100vw, 600px"></noscript></figure>
											</div>



											<div class="wp-block-column is-vertically-aligned-center"
												style="flex-basis:50%">
												<p class="has-text-align-center"><strong>SHINE
														牛久店</strong><br>茨城県牛久市上柏田<br>3丁目29-3<br>駐車場完備</p>



												<div class="swell-block-button red_ is-style-btn_line"><a
														href="https://shine-yoshiki.com/h-ushiku/" target="_blank"
														rel="noopener noreferrer"
														class="swell-block-button__link"><span>店舗詳細はこちら</span></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="swell-block-fullWide pc-py-60 sp-py-40 has-bg-img alignfull lazyload"
							style="background-color:rgba(255, 255, 255, 0.36)"
							data-bg="https://shine-yoshiki.com/wp-content/uploads/2023/04/haikei2.jpeg">
							<div class="swell-block-fullWide__inner l-container">
								<div style="height:1px" aria-hidden="true" id="qa" class="wp-block-spacer"></div>



								<figure class="wp-block-image size-full is-resized animated fadeInUp" id="qa"><img
										decoding="async"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-src="https://shine-yoshiki.com/wp-content/uploads/2023/04/6.png"
										alt="完全個室パーソナルジムSHINE（シャイン)よくある質問" class="wp-image-535 lazyload" width="450"
										height="200"
										data-srcset="https://shine-yoshiki.com/wp-content/uploads/2023/04/6.png 900w, https://shine-yoshiki.com/wp-content/uploads/2023/04/6-300x133.png 300w, https://shine-yoshiki.com/wp-content/uploads/2023/04/6-768x341.png 768w"
										sizes="(max-width: 450px) 100vw, 450px"
										data-aspectratio="450/200"><noscript><img decoding="async" src="images/6.png"
											alt="完全個室パーソナルジムSHINE（シャイン)よくある質問" class="wp-image-535" width="450"
											height="200"
											srcset="images/6.png 900w, images/6-300x133.png 300w, images/6-768x341.png 768w"
											sizes="(max-width: 450px) 100vw, 450px"></noscript></figure>



								<div
									class="wp-block-group has-border -border03 has-white-background-color has-background is-layout-constrained">
									<div class="wp-block-group__inner-container">
										<dl class="swell-block-faq is-style-faq-border" data-q="col-text"
											data-a="col-text">
											<div class="swell-block-faq__item animated fadeInUp">
												<dt class="faq_q"><strong>トレーニングの時間はこちらで決められますか？</strong></dt>
												<dd class="faq_a">
													<p>トレーニング時間は決められます。<br> ご予約が取りづらいお時間帯もございますが、なるべくご要望にはお応えさせていただきます。
													</p>
												</dd>
											</div>



											<div class="swell-block-faq__item animated fadeInUp">
												<dt class="faq_q"><strong>運動の経験が無いのですが大丈夫でしょうか？</strong></dt>
												<dd class="faq_a">
													<p>運動経験がない人の方が沢山ご来店いただいていますのでご安心ください。</p>
												</dd>
											</div>



											<div class="swell-block-faq__item animated fadeInUp">
												<dt class="faq_q"><strong><strong>食事制限などはありますでしょうか？</strong></strong>
												</dt>
												<dd class="faq_a">
													<p>お食事制限はございます。<br>糖質制限は基本的にはせずに、お客様に合ったお食事指導をさせていただきますのでご安心ください。
													</p>
												</dd>
											</div>



											<div class="swell-block-faq__item animated fadeInUp">
												<dt class="faq_q"><strong>お支払いはどのようにすれば良いですか？</strong></dt>
												<dd class="faq_a">
													<p>お支払いはお振込みか、クレジット支払い（American
														Express、Diners、JCB、Visa、Mastercard）をお選びいただくことが可能でございます。現金払いは原則お受け付けしておりません。
													</p>
												</dd>
											</div>
										</dl>
										<script type="application/ld+json">
											{
												"@context": "https:\/\/schema.org",
												"@id": "#FAQContents",
												"@type": "FAQPage",
												"mainEntity": [{
													"@type": "Question",
													"name": "トレーニングの時間はこちらで決められますか？",
													"acceptedAnswer": {
														"@type": "Answer",
														"text": "<p>トレーニング時間は決められます。<br> ご予約が取りづらいお時間帯もございますが、なるべくご要望にはお応えさせていただきます。<\/p>"
													}
												}, {
													"@type": "Question",
													"name": "運動の経験が無いのですが大丈夫でしょうか？",
													"acceptedAnswer": {
														"@type": "Answer",
														"text": "<p>運動経験がない人の方が沢山ご来店いただいていますのでご安心ください。<\/p>"
													}
												}, {
													"@type": "Question",
													"name": "食事制限などはありますでしょうか？",
													"acceptedAnswer": {
														"@type": "Answer",
														"text": "<p>お食事制限はございます。<br>糖質制限は基本的にはせずに、お客様に合ったお食事指導をさせていただきますのでご安心ください。<\/p>"
													}
												}, {
													"@type": "Question",
													"name": "お支払いはどのようにすれば良いですか？",
													"acceptedAnswer": {
														"@type": "Answer",
														"text": "<p>お支払いはお振込みか、クレジット支払い（American Express、Diners、JCB、Visa、Mastercard）をお選びいただくことが可能でございます。現金払いは原則お受け付けしておりません。<\/p>"
													}
												}]
											}
										</script>
									</div>
								</div>



								<div class="swell-block-button red_ animated fadeIn is-style-btn_normal"><a
										href="https://shine-yoshiki.com/contact/" target="_blank"
										rel="noopener noreferrer"
										class="swell-block-button__link"><span>体験申し込みはこちら</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<footer id="footer" class="l-footer">
			<div class="l-footer__inner">
				<div class="l-footer__foot">
					<div class="l-container">
						<ul class="l-footer__nav">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1401"><a
									href="https://shine-yoshiki.com/contact2/">お問い合わせ</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-639"><a
									href="https://shine-yoshiki.com/privacy/">プライバシーポリシー</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-882"><a
									href="https://shine-yoshiki.com/company/">会社概要</a></li>
						</ul>
						<p class="copyright">
							<span lang="en">©</span>
							SHINE（シャイン）. </p>
					</div>
				</div>
			</div>
		</footer>
		<div class="p-fixBtnWrap">

			<button id="pagetop" class="c-fixBtn c-plainBtn hov-bg-main" data-onclick="pageTop" aria-label="ページトップボタン"
				data-has-text>
				<i class="c-fixBtn__icon icon-chevron-up" role="presentation"></i>
			</button>
		</div>

		<div id="search_modal" class="c-modal p-searchModal">
			<div class="c-overlay" data-onclick="toggleSearch"></div>
			<div class="p-searchModal__inner">
				<form role="search" method="get" class="c-searchForm" action="https://shine-yoshiki.com/">
					<input type="text" value name="s" class="c-searchForm__s s" placeholder="検索" aria-label="検索ワード">
					<button type="submit" class="c-searchForm__submit icon-search hov-opacity u-bg-main" value="search"
						aria-label="検索を実行する"></button>
				</form>
				<button class="c-modal__close c-plainBtn" data-onclick="toggleSearch">
					<i class="icon-batsu"></i> 閉じる </button>
			</div>
		</div>
	</div>
	<!--/ #all_wrapp-->
	<div class="l-scrollObserver" aria-hidden="true"></div>
@endsection


@section('script')
@endsection

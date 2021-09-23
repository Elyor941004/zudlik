@extends('layouts.main')
	@section('content')
		<div class="main-content"> 
			<div class="grid-bg js-grid-bg grid-bg_show"> 
				<div class="grid-bg__line">
				</div> 
				<div class="grid-bg__line">
				</div> 
				<div class="grid-bg__line">
				</div> 
			</div> 
			<div class='wrapper'> 
				<div class="globe"> 
					<div class="globe__shadow">
					</div> 
				</div> 
				<section class='main | section'> 
					<div class="myContainer"> 
						<div class="main__info"> 
							<h2 class="main__subtitle | subtitle"> Ship to and from anywhere in the world 
							</h2> 
							<h1 class="main__title"> Find the best freight quote </h1> 
						</div> 
						<div class="main__filter | filter" id="main-filter" data-filter='{ "filters": { "rates": { "title": "rates", "link": "/freight/" }, "tracking": { "title": "tracking", "link": "/container/tracking/" }, "schedules": false }, "linkRequest": "/shipping/request/", "logo": true, "filtersAutoFocus": true }' data-loading='async'>
						</div> 
					</div> 
				</section> 
				<section class="section"> 
					<div class="myContainer"> 
						<h3 class='title title_size-l'> Popular routes </h3> 
						<div id="popular-routes-widget" data-filter='{"platform":1,"currency":"USD"}' data-theme='{"color":"#ffffff","backgroundColor":"#000000"}'> 
						</div> 
					</div> 
				</section> 
				<section class='bigBanner | section js-bigBanner'> 
					<div class="bigBanner__slider | swiper-container js-bigBanner-slider"> 
						<div class='swiper-wrapper'> 
							<div class="bigBanner__item bigBanner__item_type17 | swiper-slide" data-theme="white"> 
								<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
									<source srcset="{{asset('design/images/index/slider/slide17/bg-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
									<source srcset="{{asset('design/images/index/slider/slide17/bg-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
									<source srcset="{{asset('design/images/index/slider/slide17/bg.webp')}}" type="image/webp"> 
									<img class="swiper-lazy" src="#" width="756" height="680" data-src="{{asset('design/images/index/slider/slide17/bg.png')}}" alt="bg"> 
								</picture> 
								<div class="bigBanner__container | myContainer"> 
									<div class="bigBanner__info"> 
										<div class="bigBanner__wrapper"> 
											<p class="bigBanner__title" data-swiper-parallax="-100"> 
												<span class="bigBanner__title-text bigBanner__title-text_block">CARGOES Finance</span> 
											</p> 
											<p class="bigBanner__subtitle" data-swiper-parallax="-300"> Unlock new opportunities by accessing financial solutions for your logistics. </p> 
											<a class="bigBanner__link bigBanner__link_color-type7 | c-button c-button_link" target="_blank" href="https://cargoes.com/finance?utm_source=Searates&amp;utm_medium=CTA_Banner&amp;utm_campaign=CF_2021_Launch" data-swiper-parallax="-500"> 
												<span class="bigBanner__link-text">Show more
												</span> 
												<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
													<path class="c-arrow__line" d="M1 5h7"/> 
													<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
												</svg> 
											</a> 
										</div> 
										<div class="bigBanner__row" data-swiper-parallax="-700"> 
											<div class="bigBanner__col"> 
												<div class="bigBanner__col-icon"> 
													<svg viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"> 
														<path d="M2.52632 13.3684L0 15.8442V8.73684H2.52632V13.3684ZM6.73684 11.8189L5.41474 10.6905L4.21053 11.8021V5.36842H6.73684V11.8189ZM10.9474 10.4211L8.42105 12.9474V2H10.9474V10.4211ZM13.3137 10.2611L11.7895 8.73684H16V12.9474L14.4926 11.44L8.42105 17.4611L5.49895 14.9179L2.31579 18H0L5.44842 12.6611L8.42105 15.1705" fill="white"/> 
													</svg> 
												</div> 
												<p class="bigBanner__col-title">Trade finance</p> 
												<p class="bigBanner__col-text"> Access pre and post- shipment financing for your imports and exports </p> 
											</div> 
											<div class="bigBanner__col"> 
												<div class="bigBanner__col-icon"> 
													<svg viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"> 
														<path d="M0.0289296 12.7706C0.0575242 12.8786 0.107216 12.9798 0.175139 13.0684C0.243062 13.1571 0.32787 13.2314 0.42467 13.2872L2.05018 14.2267V16.098C2.05018 16.3238 2.13985 16.5402 2.29945 16.6998C2.45906 16.8594 2.67553 16.9491 2.90124 16.9491H4.77271L5.71227 18.5745C5.78762 18.7033 5.8952 18.8102 6.02442 18.8849C6.15365 18.9595 6.30007 18.9991 6.44929 19C6.59737 19 6.7446 18.9609 6.87566 18.8851L8.49948 17.9464L10.125 18.886C10.3204 18.9987 10.5525 19.0292 10.7705 18.971C10.9884 18.9128 11.1744 18.7705 11.2875 18.5753L12.2262 16.9499H14.0977C14.3234 16.9499 14.5399 16.8603 14.6995 16.7007C14.8591 16.5411 14.9488 16.3246 14.9488 16.0989V14.2275L16.5743 13.288C16.6711 13.2321 16.756 13.1576 16.824 13.0688C16.892 12.9801 16.9419 12.8788 16.9707 12.7707C16.9996 12.6627 17.0068 12.55 16.9921 12.4392C16.9774 12.3283 16.941 12.2214 16.8849 12.1247L15.9462 10.5001L16.8858 8.87636C16.9987 8.68101 17.0294 8.4488 16.9712 8.23081C16.9129 8.01282 16.7705 7.82688 16.5751 7.71388L14.9496 6.77437V4.90214C14.9496 4.67644 14.86 4.45998 14.7003 4.30038C14.5407 4.14079 14.3243 4.05113 14.0986 4.05113H12.2271L11.2884 2.42655C11.175 2.23159 10.9894 2.08912 10.7718 2.02997C10.6638 2.00071 10.5512 1.99317 10.4403 2.00778C10.3294 2.02239 10.2225 2.05886 10.1258 2.11508L8.49948 3.05374L6.87481 2.11423C6.67945 2.00131 6.44723 1.9706 6.22923 2.02885C6.01122 2.0871 5.82528 2.22953 5.71227 2.42484L4.77271 4.05028H2.90124C2.67553 4.05028 2.45906 4.13994 2.29945 4.29953C2.13985 4.45913 2.05018 4.67559 2.05018 4.90129V6.77266L0.42467 7.71218C0.229406 7.82566 0.087077 8.0119 0.0288543 8.23011C-0.0293684 8.44831 0.00126132 8.6807 0.114035 8.87636L1.0536 10.5001L0.114035 12.1238C0.00168516 12.3198 -0.0288926 12.5522 0.0289296 12.7706ZM8.49948 11.3511C5.53781 11.3511 5.09526 9.75206 5.09526 8.79807C5.09526 7.70282 5.97099 6.59991 7.64842 6.31737V5.40424H9.35053V6.34801C10.8263 6.69692 11.3931 7.92493 11.3931 8.79807H10.542L9.69095 8.81339C9.67904 8.49001 9.50798 7.94706 8.49948 7.94706C7.39396 7.94706 6.79737 8.38533 6.79737 8.79807C6.79737 9.11635 6.79737 9.64908 8.49948 9.64908C11.4611 9.64908 11.9037 11.2481 11.9037 12.2021C11.9037 13.2974 11.028 14.4003 9.35053 14.6828V15.6062H7.64842V14.6871C5.6578 14.3748 5.09526 12.9825 5.09526 12.2021H6.79737C6.80673 12.3238 6.93268 13.0531 8.49948 13.0531C9.67393 13.0531 10.2016 12.5553 10.2016 12.2021C10.2016 11.9255 10.2016 11.3511 8.49948 11.3511Z" fill="white"/> 
													</svg> 
												</div> 
												<p class="bigBanner__col-title">Logistics finance</p> 
												<p class="bigBanner__col-text"> Access to receivables and payables financing </p> 
											</div> 
											<div class="bigBanner__col"> 
												<div class="bigBanner__col-icon"> 
													<svg viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"> 
														<path d="M6.71053 1V6.1C6.71053 6.55087 6.88728 6.98327 7.20189 7.30208C7.51651 7.62089 7.94322 7.8 8.38816 7.8H13.4211V16.3C13.4211 16.7509 13.2443 17.1833 12.9297 17.5021C12.6151 17.8209 12.1884 18 11.7434 18H1.67763C1.2327 18 0.805984 17.8209 0.491367 17.5021C0.17675 17.1833 0 16.7509 0 16.3V2.7C0 2.24913 0.17675 1.81673 0.491367 1.49792C0.805984 1.17911 1.2327 1 1.67763 1H6.71053Z" fill="white"/> 
														<path d="M7.82812 1.44727V6.36832C7.82812 6.48697 7.87526 6.60076 7.95916 6.68466C8.04305 6.76855 8.15684 6.81569 8.27549 6.81569H13.1965L7.82812 1.44727Z" fill="white"/> 
													</svg> 
												</div> 
												<p class="bigBanner__col-title">Inventory finance</p> 
												<p class="bigBanner__col-text"> Access to finance with your inventory as collateral </p> 
											</div> 
										</div> 
									</div> 
									<div class="bigBanner__decor"> 
										<picture class="bigBanner__picture"> 
											<source srcset="{{asset('design/images/index/slider/slide17/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
											<source srcset="{{asset('design/images/index/slider/slide17/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
											<source srcset="{{asset('design/images/index/slider/slide17/el1.webp')}}" type="image/webp"> 
											<img class="swiper-lazy" src="#" width="341" height="609" data-src="{{asset('design/images/index/slider/slide17/el1.jpg')}}" alt="el1"> 
										</picture> 
										<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
										</div> 
									</div> 
								</div> 
							</div> 
							<div class="bigBanner__item bigBanner__item_type1 | swiper-slide" data-theme="blue"> 
								<div class="bigBanner__container | myContainer"> 
									<div class="bigBanner__info"> 
										<p class="bigBanner__title" data-swiper-parallax="-100"> 
											<span class="bigBanner__title-text bigBanner__title-text_color-type1">24/7</span> 
											<span class="bigBanner__title-text">all time zones support</span> 
										</p> 
										<p class="bigBanner__subtitle" data-swiper-parallax="-300"> 
											<span class="bigBanner__subtitle-text">Our support teams around the world are ready to pick up your need as quickly as they appear. Book with SeaRates and get a bespoke expert who is available to help 24/7/365.</span> 
											<span class="bigBanner__subtitle-text bigBanner__subtitle-text_block">Ship your freight with confidence!</span> 
										</p> 
										<a class="bigBanner__link | c-button c-button_link" href="blog/post/round-the-clock-support/index.html" data-swiper-parallax="-500"> 
											<span class="bigBanner__link-text">Show more</span> 
												<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
													<path class="c-arrow__line" d="M1 5h7"/> 
													<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
												</svg> 
											</a> 
										</div> 
										<div class="bigBanner__decor"> 
											<div class="swiper-lazy-preloader swiper-lazy-preloader_blue">
											</div> 
										<div class="bigBanner__circles"> 
											<div class="bigBanner__circle bigBanner__circle_l">
											</div> 
											<div class="bigBanner__circle bigBanner__circle_m">
											</div> 
											<div class="bigBanner__circle bigBanner__circle_s">
											</div> 
											<div class="bigBanner__circle bigBanner__circle_rotate bigBanner__circle_xs1">
											</div> 
											<div class="bigBanner__circle bigBanner__circle_rotate bigBanner__circle_xs2">
											</div> 
											<div class="bigBanner__circle bigBanner__circle_rotate bigBanner__circle_xs3">
											</div> 
										</div> 
										<div class="bigBanner__images"> 
											<picture class="bigBanner__image bigBanner__image_el1"> 
												<source srcset="{{asset('design/images/index/slider/slide1/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
												<source srcset="{{asset('design/images/index/slider/slide1/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
												<source srcset="{{asset('design/images/index/slider/slide1/el1.webp')}}" type="image/webp"> 
												<img class="swiper-lazy" src="#" data-src="{{asset('design/images/index/slider/slide1/el1.png')}}" alt="el1"> 
											</picture> 
											<picture class="bigBanner__image bigBanner__image_el2"> 
												<source srcset="{{asset('design/images/index/slider/slide1/el2-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
												<source srcset="{{asset('design/images/index/slider/slide1/el2-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
												<source srcset="{{asset('design/images/index/slider/slide1/el2.webp')}}" type="image/webp"> 
										<img class="swiper-lazy" src="#" data-src="{{asset('design/images/index/slider/slide1/el2.png')}}" alt="el2"> 
									</picture> 
									<picture class="bigBanner__image bigBanner__image_el3"> 
										<source srcset="{{asset('design/images/index/slider/slide1/el3-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
										<source srcset="{{asset('design/images/index/slider/slide1/el3-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
										<source srcset="{{asset('design/images/index/slider/slide1/el3.webp')}}" type="image/webp"> 
										<img class="swiper-lazy" src="#" data-src="{{asset('design/images/index/slider/slide1/el3.png')}}" alt="el3"> 
									</picture> 
									<picture class="bigBanner__image bigBanner__image_el4"> 
										<source srcset="{{asset('design/images/index/slider/slide1/el4-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
										<source srcset="{{asset('design/images/index/slider/slide1/el4-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
										<source srcset="{{asset('design/images/index/slider/slide1/el4.webp')}}" type="image/webp"> 
										<img class="swiper-lazy" src="#" data-src="{{asset('design/images/index/slider/slide1/el4.png')}}" alt="el4">
									</picture> 
								</div> 
							</div> 
						</div> 
					</div> 
					<div class="bigBanner__item bigBanner__item_type2 | swiper-slide" data-theme="black"> 
						<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
							<source srcset="{{asset('design/images/index/slider/slide2/bg-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
							<source srcset="{{asset('design/images/index/slider/slide2/bg-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
							<source srcset="{{asset('design/images/index/slider/slide2/bg.webp')}}" type="image/webp"> 
							<img class="swiper-lazy" src="#" width="1920" height="680" data-src="{{asset('design/images/index/slider/slide2/bg.jpg')}}" alt="bg"> 
						</picture> 
						<div class="bigBanner__container | myContainer"> 
							<div class="bigBanner__info"> 
								<picture class="bigBanner__logo" data-swiper-parallax="-100"> 	
									<source srcset="{{asset('design/images/index/slider/slide2/logo.webp')}}" type="image/webp"> 
									<img src="{{asset('design/images/index/slider/slide2/logo.png')}}" width="183" height="56" alt="logo"> 
								</picture> 
									<p class="bigBanner__title" data-swiper-parallax="-300"> 
										<span class="bigBanner__title-text bigBanner__title-text_block">Exclusive</span> 
										<span class="bigBanner__title-text bigBanner__title-text_block">Unifeeder network</span> 
									</p> 
									<p class="bigBanner__subtitle" data-swiper-parallax="-500"> Access a network of feeder and shortsea in Europe, Middle and Far East. Efficient and sustainable transport solutions have become more affordable. </p> 
									<a class="bigBanner__link bigBanner__link_color-type1 | c-button c-button_link" href="blog/post/exclusive-unifeeder-network.html" data-swiper-parallax="-700"> 
										<span class="bigBanner__link-text">Show more</span> 
										<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
											<path class="c-arrow__line" d="M1 5h7"/> 
											<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
										</svg> 
									</a> 
								</div> 
								<div class="bigBanner__decor"> 
									<div class="swiper-lazy-preloader swiper-lazy-preloader_black">
									</div> 
								</div> 
							</div> 
						</div> 
						<div class="bigBanner__item bigBanner__item_type3 | swiper-slide" data-theme="white"> 
							<div class="bigBanner__container | myContainer"> 
								<div class="bigBanner__info"> 
									<p class="bigBanner__title" data-swiper-parallax="-100"> P&O coverage </p> 
									<p class="bigBanner__subtitle" data-swiper-parallax="-300"> Get access to a leading provider of multimodal logistics solutions with an industry focus via P&O Ferrymasters, Ferries, and Maritime Logistics — by land, rivers and sea. </p> 
									<a class="bigBanner__link bigBanner__link_color-type2 | c-button c-button_link" href="blog/post/po-coverage.html" data-swiper-parallax="-500"> 
										<span class="bigBanner__link-text">Show more</span> 
										<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
											<path class="c-arrow__line" d="M1 5h7"/> 
											<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> </svg> 
										</a> 
										<picture class="bigBanner__logo" data-swiper-parallax="-700"> 
											<source srcset="{{asset('design/images/index/slider/slide3/logo.webp')}}" type="image/webp"> 
											<img src="{{asset('design/images/index/slider/slide3/logo.png')}}" width="97" height="23" alt="logo"> 
										</picture> 
									</div> 
									<div class="bigBanner__decor"> 
										<picture class="bigBanner__picture"> 
											<source srcset="{{asset('design/images/index/slider/slide3/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
											<source srcset="{{asset('design/images/index/slider/slide3/el1-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
											<source srcset="{{asset('design/images/index/slider/slide3/el1.webp')}}" type="image/webp"> 
											<img class="swiper-lazy" src="#" width="636" height="452" data-src="{{asset('design/images/index/slider/slide3/el1.jpg')}}" alt="el1"> 
										</picture> 
									<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
									</div> 
								</div> 
							</div> 
						</div> 
						<div class="bigBanner__item bigBanner__item_type4 | swiper-slide" data-theme="white"> 
							<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
								<source srcset="{{asset('design/images/index/slider/slide4/bg1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
								<source srcset="{{asset('design/images/index/slider/slide4/bg1-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
								<source srcset="{{asset('design/images/index/slider/slide4/bg1.webp')}}" type="image/webp"> 
								<img class="swiper-lazy" src="#" width="1920" height="680" data-src="{{asset('design/images/index/slider/slide4/bg1.jpg')}}" alt="bg"> 
							</picture> 
							<div class="bigBanner__container | myContainer"> 
								<div class="bigBanner__info"> 
									<picture class="bigBanner__logo" data-swiper-parallax="-100"> 
										<source srcset="{{asset('design/images/index/slider/slide4/logo.webp')}}" type="image/webp"> 
										<img src="{{asset('design/images/index/slider/slide4/logo.png')}}" width="88" height="30" alt="logo"> 
									</picture> 
									<p class="bigBanner__title" data-swiper-parallax="-300"> Port-centric DPWL coverage </p> 
									<p class="bigBanner__subtitle" data-swiper-parallax="-500"> 
									<span class="bigBanner__subtitle-text">DP World Logistics is a division responsible for the inland and intermodal activities of DP World in</span> 
									<span class="bigBanner__subtitle-text bigBanner__subtitle-text_accent">12</span> 
									<span class="bigBanner__subtitle-text">countries. Our customers get the most of one-stop-shop solutions in connection to the terminals, logistics parks and free zones.</span> 
								</p> 
								<a class="bigBanner__link bigBanner__link_color-type2 | c-button c-button_link" href="blog/post/port-centric-dpwl-coverage.html" data-swiper-parallax="-700">
									<span class="bigBanner__link-text">Show more</span> 
									<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
										<path class="c-arrow__line" d="M1 5h7"/> 
										<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
									</svg> 
								</a> 
							</div> 
							<div class="bigBanner__digits"> 
								<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
								</div> 
								<div class="bigBanner__digit"> 
									<span class="bigBanner__digit-number">12</span> 
									<span class="bigBanner__digit-text">countries</span> 
								</div> 
								<div class="bigBanner__digit"> 
									<span class="bigBanner__digit-number">100+</span> 
									<span class="bigBanner__digit-text">trucks</span> 
								</div> 
								<div class="bigBanner__digit"> 
									<span class="bigBanner__digit-number">100k+</span> 
									<span class="bigBanner__digit-text">sqm warehouses</span> 
								</div> 
							</div> 
						</div> 
					</div> 
					<div class="bigBanner__item bigBanner__item_type5 | swiper-slide" data-theme="white"> 
						<div class="bigBanner__container | myContainer"> 
							<div class="bigBanner__info"> 
								<picture class="bigBanner__logo" data-swiper-parallax="-100"> 
									<source srcset="{{asset('design/images/index/slider/slide5/logo.webp')}}" type="image/webp"> 
									<img src="{{asset('design/images/index/slider/slide5/logo.png')}}" width="88" height="30" alt="logo"> 
								</picture> 
								<p class="bigBanner__title" data-swiper-parallax="-300"> 
									<span class="bigBanner__title-text bigBanner__title-text_block bigBanner__title-text_ovals">80 terminals
									</span> 
									<span class="bigBanner__title-text bigBanner__title-text_block">of DP World</span> 
								</p> 
								<p class="bigBanner__subtitle" data-swiper-parallax="-500"> Special benefits at 80+ DP World terminals around the world. Receive individual offers and solutions using these terminals for your supply chain needs. 
								</p> 
							<a class="bigBanner__link bigBanner__link_color-type2 | c-button c-button_link" href="contact/index.html" data-swiper-parallax="-700"> 
								<span class="bigBanner__link-text">Show more</span> 
								<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
									<path class="c-arrow__line" d="M1 5h7"/> 
									<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
								</svg> 
							</a> 
						</div> 
						<div class="bigBanner__decor"> 
							<picture class="bigBanner__picture"> 
								<source srcset="{{asset('design/images/index/slider/slide5/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
								<source srcset="{{asset('design/images/index/slider/slide5/el1-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
								<source srcset="{{asset('design/images/index/slider/slide5/el1.webp')}}" type="image/webp"> 
								<img class="swiper-lazy" src="#" width="636" height="452" data-src="{{asset('design/images/index/slider/slide5/el1.jpg')}}" alt="el1"> 
							</picture> 
							<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
							</div> 
						</div> 
					</div> 
				</div> 
				<div class="bigBanner__item bigBanner__item_type6 | swiper-slide" data-theme="black"> 
					<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
						<source srcset="{{asset('design/images/index/slider/slide6/bg-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
						<source srcset="{{asset('design/images/index/slider/slide6/bg-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
						<source srcset="{{asset('design/images/index/slider/slide6/bg.webp')}}" type="image/webp"> 
						<img class="swiper-lazy" src="#" width="1920" height="680" data-src="{{asset('design/images/index/slider/slide6/bg.jpg')}}" alt="bg"> 
					</picture> 
					<div class="bigBanner__container | myContainer"> 
						<div class="bigBanner__info"> 
							<p class="bigBanner__title" data-swiper-parallax="-100"> Exclusive space from China to the USA </p> 
							<p class="bigBanner__subtitle" data-swiper-parallax="-300"> On a tough FCL market SeaRates offers the most competitive shipping rates with guaranteed space from China, direct from the global freight forwarding community. </p> 
							<p class="bigBanner__subtitle" data-swiper-parallax="-500"> Our team will help you find quotes, buy insurance, and plan your end-to-end shipping journey. </p> 
							<a class="bigBanner__link | c-button c-button_link" href="blog/post/special-offers-from-searates/index.html" data-swiper-parallax="-700"> 
								<span class="bigBanner__link-text">Show more</span> 
								<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
									<path class="c-arrow__line" d="M1 5h7"/> 
									<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
								</svg> 
							</a> 
						</div> 
						<div class="bigBanner__decor"> 
							<div class="swiper-lazy-preloader swiper-lazy-preloader_black">
							</div> 
						</div> 
					</div> 
				</div> 
				<div class="bigBanner__item bigBanner__item_type8 | swiper-slide" data-theme="white"> 
					<div class="bigBanner__container | myContainer"> 
						<div class="bigBanner__info"> 
							<p class="bigBanner__title" data-swiper-parallax="-100"> 
								<span class="bigBanner__title-text bigBanner__title-text_block">Cutting edge</span> 
								<span class="bigBanner__title-text bigBanner__title-text_block">digital logistics tools</span> 
							</p> 
							<p class="bigBanner__subtitle" data-swiper-parallax="-300"> Within SeaRates shippers get access to the ultimate ecosystem of applications with rate benchmarking, cargo tracking, route optimization, schedules, paperwork, and more! All this is available with SaaS access, API and white-label web integrations. 
							</p> 
							<a class="bigBanner__link bigBanner__link_color-type2 | c-button c-button_link" href="services/tools/index.html" data-swiper-parallax="-500"> 
								<span class="bigBanner__link-text">Show more</span> 
								<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
									<path class="c-arrow__line" d="M1 5h7"/> 
									<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
								</svg> 
							</a> 
						</div> 
					<div class="bigBanner__decor"> 
						<picture class="bigBanner__picture"> 
							<source srcset="{{asset('design/images/index/slider/slide8/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
							<source srcset="{{asset('design/images/index/slider/slide8/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
							<source srcset="{{asset('design/images/index/slider/slide8/el1.webp')}}" type="image/webp"> 
							<img class="swiper-lazy" src="#" width="655" height="543" data-src="{{asset('design/images/index/slider/slide8/el1.png')}}" alt="el1"> 
						</picture> 
						<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="bigBanner__item bigBanner__item_type9 | swiper-slide" data-theme="white"> 
				<div class="bigBanner__container | myContainer"> 
					<div class="bigBanner__info"> 
						<p class="bigBanner__title" data-swiper-parallax="-100"> 
							<span class="bigBanner__title-text bigBanner__title-text_block">Logistics 💸</span> 
							<span class="bigBanner__title-text bigBanner__title-text_block">liability insurance</span> 
						</p> 
						<p class="bigBanner__subtitle" data-swiper-parallax="-300"> Thanks to the world's top insurance partners, we will indemnify for any loss, damage, or liability as to the result of an occurrence arising out of the property incident up to $50,000,000. 
						</p> 
						<a class="bigBanner__link bigBanner__link_color-type3 | c-button c-button_link" href="contact/index.html" data-swiper-parallax="-500"> 
							<span class="bigBanner__link-text">Show more</span> 
							<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
								<path class="c-arrow__line" d="M1 5h7"/> 
								<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
							</svg> 
						</a> 
					</div> 
					<div class="bigBanner__decor"> 
						<picture class="bigBanner__picture"> 
							<source srcset="{{asset('design/images/index/slider/slide9/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
							<source srcset="{{asset('design/images/index/slider/slide9/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
							<source srcset="{{asset('design/images/index/slider/slide9/el1.webp')}}" type="image/webp"> 
							<img class="swiper-lazy" src="#" width="747" height="451" data-src="{{asset('design/images/index/slider/slide9/el1.png')}}" alt="el1"> 
						</picture> 
						<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="bigBanner__item bigBanner__item_type10 | swiper-slide" data-theme="purple"> 
				<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
					<source srcset="{{asset('design/images/index/slider/slide10/bg-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
					<source srcset="{{asset('design/images/index/slider/slide10/bg-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
					<source srcset="{{asset('design/images/index/slider/slide10/bg.webp')}}" type="image/webp"> 
					<img class="swiper-lazy" src="#" width="1920" height="680" data-src="{{asset('design/images/index/slider/slide10/bg.jpg')}}" alt="bg">
				</picture> 
				<div class="bigBanner__container | myContainer"> 
					<div class="bigBanner__info"> 
						<p class="bigBanner__title" data-swiper-parallax="-100"> Personal dashboard </p> 
						<p class="bigBanner__subtitle" data-swiper-parallax="-300"> See and manage all your processes in one dashboard on the desktop or in the mobile app! Control your bookings, contracts, finance, and all other features needed for managing logistics in your trading business. Get the full seamless experience of the log-tech! </p> 
						<a class="bigBanner__link bigBanner__link_color-type4 | c-button c-button_link" href="blog/post/your-personal-dashboard/index.html" data-swiper-parallax="-500"> 
							<span class="bigBanner__link-text">Show more</span> 
							<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
								<path class="c-arrow__line" d="M1 5h7"/> 
								<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
							</svg> 
						</a> 
					</div> 
					<div class="bigBanner__decor"> 
						<picture class="bigBanner__picture"> 
							<source srcset="{{asset('design/images/index/slider/slide10/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
							<source srcset="{{asset('design/images/index/slider/slide10/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
							<source srcset="{{asset('design/images/index/slider/slide10/el1.webp')}}" type="image/webp"> 
							<img class="swiper-lazy" src="#" width="759" height="524" data-src="{{asset('design/images/index/slider/slide10/el1.png')}}" alt="el1">
						</picture> 
						<div class="swiper-lazy-preloader swiper-lazy-preloader_purple">
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="bigBanner__item bigBanner__item_type11 | swiper-slide" data-theme="white"> 
				<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
				<source srcset="{{asset('design/images/index/slider/slide11/bg-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
				<source srcset="{{asset('design/images/index/slider/slide11/bg-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
				<source srcset="{{asset('design/images/index/slider/slide11/bg.webp')}}" type="image/webp"> 
				<img class="swiper-lazy" src="#" width="1920" height="680" data-src="{{asset('design/images/index/slider/slide11/bg.jpg')}}" alt="bg"> 
			</picture> 
			<div class="bigBanner__container | myContainer"> 
				<div class="bigBanner__info"> 
					<p class="bigBanner__title" data-swiper-parallax="-100"> Digital Freight Alliance </p> 
					<p class="bigBanner__subtitle" data-swiper-parallax="-300"> Being backed by the unique community of the most reliable freight forwarders around the world in 190+ countries connected to SeaRates system, we are able to provide a tailor made solutions, consolidated volumes and special discounts to our customers. </p> 
					<a class="bigBanner__link bigBanner__link_color-type2 | c-button c-button_link" href="shipping/for-carriers/index.html" data-swiper-parallax="-500"> 
						<span class="bigBanner__link-text">Show more</span> 
						<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
					</a> 
				</div> 
				<div class="bigBanner__decor"> 
					<picture class="bigBanner__picture"> 
						<source srcset="{{asset('design/images/index/slider/slide11/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
						<source srcset="{{asset('design/images/index/slider/slide11/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
						<source srcset="{{asset('design/images/index/slider/slide11/el1.webp')}}" type="image/webp"> 
						<img class="swiper-lazy" src="#" width="615" height="615" data-src="{{asset('design/images/index/slider/slide11/el1.png')}}" alt="el1">
					</picture> 
					<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
					</div> 
				</div> 
			</div> 
		</div> 
		<div class="bigBanner__item bigBanner__item_type12 | swiper-slide" data-theme="white"> 
			<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
				<source srcset="{{asset('design/images/index/slider/slide12/bg-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
				<source srcset="{{asset('design/images/index/slider/slide12/bg-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
				<source srcset="{{asset('design/images/index/slider/slide12/bg.webp')}}" type="image/webp"> 
				<img class="swiper-lazy" src="#" width="1920" height="680" data-src="{{asset('design/images/index/slider/slide12/bg.jpg')}}" alt="bg"> 
			</picture> 
			<div class="bigBanner__container | myContainer"> 
				<div class="bigBanner__info"> 
					<p class="bigBanner__title" data-swiper-parallax="-100"> 
					<span class="bigBanner__title-text bigBanner__title-text_block">Get promo-code</span> 
					<span class="bigBanner__title-text bigBanner__title-text_block">on your first shipment</span> 
				</p> 
				<p class="bigBanner__subtitle" data-swiper-parallax="-300"> Save up to 10% on your first shipment booked through SeaRates using your unique promo-code. Don't put it on hold — contact our team now with your shipment details! </p> 
				<a class="bigBanner__link bigBanner__link_color-type2 | c-button c-button_link" href="blog/post/special-offers-from-searates/index.html" data-swiper-parallax="-500"> 
					<span class="bigBanner__link-text">Show more</span> 
					<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
				</a> 
			</div> 
			<div class="bigBanner__decor"> 
				<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
				</div> 
			</div> 
		</div> 
	</div> 
	<div class="bigBanner__item bigBanner__item_type13 | swiper-slide" data-theme="white"> 
		<picture class="bigBanner__bg" data-swiper-parallax="50%"> 
			<source srcset="{{asset('design/images/index/slider/slide13/bg-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
			<source srcset="{{asset('design/images/index/slider/slide13/bg-x2.jpg')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
			<source srcset="{{asset('design/images/index/slider/slide13/bg.webp')}}" type="image/webp"> 
			<img class="swiper-lazy" src="#" width="1920" height="680" data-src="{{asset('design/images/index/slider/slide13/bg.jpg')}}" alt="bg"> 
		</picture> 
		<div class="bigBanner__container | myContainer"> 
			<div class="bigBanner__info"> 
				<p class="bigBanner__title" data-swiper-parallax="-100"> 
					<span class="bigBanner__title-text bigBanner__title-text_block"> We'll beat any freight </span> 
					<span class="bigBanner__title-text bigBanner__title-text_flex"> quote by 
						<picture class="bigBanner__title-icon"> 
							<source srcset="{{asset('design/images/index/slider/slide13/el2.webp')}}" type="image/webp"> 
							<img src="{{asset('design/images/index/slider/slide13/el2.png')}}" width="45" height="45" alt="el1"> 
						</picture> ! 
					</span> 
				</p> 
				<p class="bigBanner__subtitle" data-swiper-parallax="-300"> If you have negotiated a cheaper rate with any company, please provide us a proof and we will beat it by 1%. </p> 
				<a class="bigBanner__link bigBanner__link_color-type2 | c-button c-button_link" href="blog/post/special-offers-from-searates/index.html" data-swiper-parallax="-500"> 
					<span class="bigBanner__link-text">Show more</span> 
					<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
				</a> 
			</div> 
			<div class="bigBanner__decor"> 
				<picture class="bigBanner__picture"> 
					<source srcset="{{asset('design/images/index/slider/slide13/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
					<source srcset="{{asset('design/images/index/slider/slide13/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
					<source srcset="{{asset('design/images/index/slider/slide13/el1.webp')}}" type="image/webp"> 
					<img class="swiper-lazy" src="#" width="758" height="414" data-src="{{asset('design/images/index/slider/slide13/el1.png')}}" alt="el1">
				</picture> 
				<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
				</div> 
			</div> 
		</div> 
	</div> 
	<div class="bigBanner__item bigBanner__item_type14 | swiper-slide" data-theme="white"> 
		<div class="bigBanner__container | myContainer"> 
			<div class="bigBanner__info"> 
				<p class="bigBanner__title" data-swiper-parallax="-100"> 
					<span class="bigBanner__title-text"> Special rates for contracts for </span> 
					<span class="bigBanner__title-text"> 6+ months! 
						<picture class="bigBanner__title-icon"> 
							<source srcset="{{asset('design/images/index/slider/slide14/el1.webp')}}" type="image/webp"> 
							<img src="{{asset('design/images/index/slider/slide14/el1.png')}}" width="291" height="50" alt="el1"> 
						</picture> 
					</span> 
				</p> 
				<p class="bigBanner__subtitle" data-swiper-parallax="-300"> If you contract with us for 6 months or more with a certain commitment of cargo you will ship — you are definitely getting lower rates. </p> 
				<a class="bigBanner__link bigBanner__link_color-type5 | c-button c-button_link" href="blog/post/special-offers-from-searates/index.html" data-swiper-parallax="-500"> 
					<span class="bigBanner__link-text">Show more</span> 
					<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
				</a> 
			</div> 
			<div class="bigBanner__decor"> 
				<picture class="bigBanner__picture"> 
					<source srcset="{{asset('design/images/index/slider/slide14/el2-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
					<source srcset="{{asset('design/images/index/slider/slide14/el2-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
					<source srcset="{{asset('design/images/index/slider/slide14/el2.webp')}}" type="image/webp"> 
					<img class="swiper-lazy" src="#" width="863" height="451" data-src="{{asset('design/images/index/slider/slide14/el2.png')}}" alt="el2">
				</picture> 
				<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
				</div> 
			</div> 
		</div> 
	</div> 
	<div class="bigBanner__item bigBanner__item_type15 | swiper-slide" data-theme="black"> 
		<div class="bigBanner__container | myContainer"> 
			<div class="bigBanner__info"> 
				<p class="bigBanner__title" data-swiper-parallax="-100"> Rebates for partners 
				</p> 
				<p class="bigBanner__subtitle" data-swiper-parallax="-300"> 
					<span class="bigBanner__subtitle-text">Get</span> 
					<span class="bigBanner__subtitle-text bigBanner__subtitle-text_accent">USD 25</span> 
					<span class="bigBanner__subtitle-text">rebate for every container you book through SeaRates and ship through a DP World terminal.</span> 
				</p> 
				<a class="bigBanner__link | c-button c-button_link" href="contact/index.html" data-swiper-parallax="-500"> 
					<span class="bigBanner__link-text">Show more</span> 
					<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
				</a> 
			</div> 
			<div class="bigBanner__decor"> 
				<picture class="bigBanner__picture"> 
					<source srcset="{{asset('design/images/index/slider/slide15/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
					<source srcset="{{asset('design/images/index/slider/slide15/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
					<source srcset="{{asset('design/images/index/slider/slide15/el1.webp')}}" type="image/webp"> 
					<img class="swiper-lazy" src="#" width="707" height="451" data-src="{{asset('design/images/index/slider/slide15/el1.png')}}" alt="el1">
				</picture> 
				<div class="swiper-lazy-preloader swiper-lazy-preloader_black">
				</div> 
			</div> 
		</div> 
	</div> 
	<div class="bigBanner__item bigBanner__item_type16 | swiper-slide" data-theme="white"> 
		<div class="bigBanner__container | myContainer"> 
			<div class="bigBanner__info"> 
				<p class="bigBanner__title" data-swiper-parallax="-100"> 
					<span class="bigBanner__title-text bigBanner__title-text_block">Reduce bank
					</span> 
					<span class="bigBanner__title-text bigBanner__title-text_block">charges on freight
					</span> 
				</p> 
				<p class="bigBanner__subtitle" data-swiper-parallax="-300"> Save on bank fees by arranging your freight payments through SeaRates </p> 
				<a class="bigBanner__link bigBanner__link_color-type6 | c-button c-button_link" href="contact/index.html" data-swiper-parallax="-500">
					<span class="bigBanner__link-text">Show more</span> 
					<svg class="c-arrow bigBanner__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
				</a> 
			</div> 
			<div class="bigBanner__decor"> 
				<picture class="bigBanner__picture"> 
					<source srcset="{{asset('design/images/index/slider/slide16/el1-x2.webp')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)" type="image/webp"> 
					<source srcset="{{asset('design/images/index/slider/slide16/el1-x2.png')}}" media="(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)"> 
					<source srcset="{{asset('design/images/index/slider/slide16/el1.webp')}}" type="image/webp"> 
					<img class="swiper-lazy" src="#" width="546" height="342" data-src="{{asset('design/images/index/slider/slide16/el1.jpg')}}" alt="el1">
				</picture> 
				<div class="swiper-lazy-preloader swiper-lazy-preloader_white">
				</div> 
			</div> 
		</div> 
	</div> 
</div> 
<div class="bigBanner__pagination | sliderPagination swiper-pagination">
</div> 
</div> 
</section> 
<section class='services | section'> 
	<div class='myContainer'> 
		<div class="services__header"> 
			<div class='services__box'> 
				<p class="services__subtitle | subtitle">Always improving</p> 
				<h3 class="services__title | title title_size-l">Services</h3> 
			</div> 
			<div class='services__arrows | sliderArrows'> 
				<span class='services__arrow-prev | sliderArrow sliderArrow_prev'></span> 
				<span class='services__arrow-next | sliderArrow sliderArrow_next'></span> 
			</div> 
		</div> 
		<div class='services__slider | swiper-container js-services-slider'> 
			<div class='swiper-wrapper'> 
				<div class='services__item | swiper-slide'> 
					<div class='services__item-header'> 
						<picture class='services__icon services__icon_service1'> 
							<img src="{{asset('design/images/index/services/service1.svg')}}" width="16" height="16" alt="Freight Services"> 
						</picture> 
						<h4 class="services__name">Freight Services</h4> 
					</div> 
					<p class="services__text">Open up new opportunities to grow your business. Enter new markets and discover new continents. We are with you, door-to-door.</p> 
				</div> 
			<div class='services__item | swiper-slide'> 
				<div class='services__item-header'> 
					<picture class='services__icon services__icon_service2'> 
						<img src="{{asset('design/images/index/services/service2.svg')}}" width="16" height="16" alt="Shipping & Logistics"> 
					</picture> 
					<h4 class="services__name">Shipping & Logistics</h4> 
				</div> 
				<p class="services__text">Find powerful solutions to meet your diverse transportation needs. Agile solutions to handle all your supply chain needs.</p> 
			</div> 
		<div class='services__item | swiper-slide'> 
			<div class='services__item-header'> 
				<picture class='services__icon services__icon_service3'> 
					<img src="{{asset('design/images/index/services/service3.svg')}}" width="16" height="16" alt="Business services"> 
				</picture> 
				<h4 class="services__name">Business services</h4> 
			</div> 
			<p class="services__text">We support your goals for growth with cargo insurance, online payments and paperless workflow. Take your business to the next level.
			</p> 
		</div> 
		<div class='services__item | swiper-slide'> 
			<div class='services__item-header'> 
				<picture class='services__icon services__icon_service4'> 
					<img src="{{asset('design/images/index/services/service4.svg')}}" width="16" height="16" alt="Digital Technologies"> 
				</picture> 
				<h4 class="services__name">Digital Technologies</h4> 
			</div> 
			<p class="services__text">Our priority is to offer a mix of tools and insights for businesses, no matter the size of your operation, the volume of your sales or the age of your company.</p> 
		</div> 
		<div class='services__item | swiper-slide'> 
			<div class='services__item-header'> 
				<picture class='services__icon services__icon_service5'> 
					<img src="{{asset('design/images/index/services/service5.svg')}}" width="16" height="16" alt="Support Services 24/7"> 
				</picture> 
				<h4 class="services__name">24/7 Support Services</h4> 
			</div> 
			<p class="services__text">Receive support from our experts all over the world at every stage of the process, 24/7.</p> 
		</div> 
	</div> 
</div> 
</div> 
</section> 
<section class='today | section'> 
	<div class="today__image"> 
		<img src="{{asset('design/images/index/banner/dpWorldImg.jpg')}}" alt="dp world building" width="154" height="15"> 
	</div> 
	<div class="today__part_of"> 
		<h3> <span>Part of </span> 
			<img src="{{asset('design/images/index/banner/DPLOGO.svg')}}" alt="DPLOGO"> 
		</h3> 
		<p>Rest assured that your cargo is in safe hands when you book with SeaRates by DP World.</p> 
	</div> 
	<div class="today__description"> 
		<h2>SeaRates today</h2> 
		<p>The lowest rates. The shortest transit times. SeaRates is the largest tariff search engine in the world for international shipping</p> 
		<p>We compare all available cargo delivery options at your request and arrange their transportation and insurance.</p> 
		<p>We provide transparency and control, the cheapest price and the fastest transit time.</p> 
	</div> 
</section> 
<section class='requests | section'> 
	<div class='myContainer'> 
		<div class='requests__header'> 
			<div class='requests__box'> 
				<p class="requests__subtitle | subtitle">Workflow</p> 
				<h3 class='requests__title | title title_size-l'> Active shipping leads </h3> 
			</div> 
		<div class="requests__action"> 
			<a href='shipping/list/index.html' class='requests__link | c-button c-button_link'> 
				<span>View all shipping leads</span> 
				<svg class="c-arrow " viewBox="0 0 10 10" aria-hidden="true"> 
					<path class="c-arrow__line" d="M1 5h7"/> 
					<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
				</svg> 
			</a> 
			<a class="requests__button | c-button" href='shipping/request/index.html'> Request a Quote </a> 
		</div> 
	</div> 
	<div class="requests__rollers | js-rollers"> 
		<div class="requests__roller | roller"> 
			<p class="roller__title"> 
				<svg class="roller__title-icon | icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"> 
					<path fill="#C9CFDB" d="M7.51992 13.124C8.35035 13.124 9.18078 13.1407 10.0112 13.1074 10.5648 13.0907 10.7928 13.3239 10.7928 13.8733 10.7928 16.0213 10.7928 18.1527 10.7928 20.3007 10.7928 20.8002 10.5486 21 10.0763 21 7.61762 20.9834 5.15889 21 2.70017 21 2.21168 21 2 20.7836 2 20.284 2 18.1194 2 15.9547 2 13.8067 2 13.3405 2.21168 13.124 2.6676 13.124 3.54688 13.1407 4.40988 13.124 5.28916 13.1407 5.28916 14.0232 5.28916 14.9224 5.30544 15.8049 5.30544 15.9714 5.20774 16.2045 5.41942 16.3044 5.58225 16.371 5.7288 16.2378 5.84278 16.1213 6.23357 15.7882 6.60808 15.8049 6.98258 16.1546 7.09656 16.2545 7.21054 16.421 7.40594 16.3211 7.58505 16.2212 7.50364 16.0213 7.50364 15.8715 7.51992 14.9557 7.51992 14.0399 7.51992 13.124zM18.5114 13.124C19.3581 13.124 20.2211 13.124 21.0679 13.1074 21.5889 13.0907 21.8006 13.3239 21.8006 13.8567 21.7843 15.9714 21.7843 18.1027 21.8006 20.2174 21.8006 20.7836 21.5726 20.9834 21.019 20.9834 18.5928 20.9667 16.183 20.9667 13.7568 20.9834 13.2195 20.9834 12.9752 20.7836 12.9752 20.2174 12.9915 18.1027 12.9915 15.9714 12.9752 13.8567 12.9752 13.3239 13.1869 13.1074 13.708 13.1074 14.5547 13.124 15.4177 13.124 16.2644 13.124 16.2644 14.0565 16.2644 14.989 16.2807 15.9214 16.2807 16.0546 16.2155 16.2212 16.3946 16.3044 16.5575 16.3877 16.6715 16.2711 16.7692 16.1712 17.1762 15.7716 17.5833 15.7716 18.0067 16.1712 18.1044 16.2711 18.2183 16.3877 18.3812 16.3044 18.544 16.2212 18.4951 16.0546 18.4951 15.9214 18.5114 15.0056 18.5114 14.0732 18.5114 13.124zM13.024 3.01748C13.8707 3.01748 14.7337 3.01748 15.5804 3.00083 16.1015 2.98418 16.3131 3.2173 16.3131 3.75013 16.2968 5.86482 16.2968 7.99617 16.3131 10.1109 16.3131 10.677 16.0852 10.8768 15.5478 10.8768 13.1217 10.8602 10.7118 10.8602 8.28563 10.8768 7.69945 10.8768 7.50405 10.627 7.50405 10.0443 7.52033 7.96286 7.52033 5.88147 7.50405 3.81674 7.50405 3.23395 7.71573 2.98418 8.30192 3.00083 9.13235 3.03413 9.96278 3.01748 10.8095 3.01748 10.8095 3.89999 10.8421 4.79915 10.8095 5.68166 10.7932 6.19785 10.9398 6.36436 11.3631 6.01468 11.7702 5.68166 12.1121 5.69831 12.4866 6.03133 12.6006 6.13124 12.7309 6.29775 12.91 6.18119 13.0728 6.08129 13.0077 5.88147 13.0077 5.73161 13.024 4.83245 13.024 3.93329 13.024 3.01748z"/> 
					<path fill="#fff" d="M13.0224 3.01587C13.0224 3.93168 13.0224 4.83084 13.0061 5.74665 13.0061 5.89651 13.0712 6.09633 12.9084 6.19623 12.7293 6.31279 12.599 6.14628 12.485 6.04637 12.1105 5.71335 11.7523 5.6967 11.3615 6.02972 10.9381 6.37939 10.7916 6.21288 10.8079 5.6967 10.8404 4.81419 10.8079 3.91503 10.8079 3.03252 11.5406 3.01587 12.2733 3.01587 13.0224 3.01587zM18.5114 13.1226C18.5114 14.0551 18.5114 14.9875 18.4951 15.92 18.4951 16.0532 18.5602 16.2197 18.3811 16.303 18.2183 16.3862 18.1043 16.2697 18.0066 16.1698 17.5995 15.7701 17.1924 15.7701 16.7691 16.1698 16.6714 16.2697 16.5574 16.3862 16.3946 16.303 16.2317 16.2197 16.2806 16.0532 16.2806 15.92 16.2643 14.9875 16.2643 14.0551 16.2643 13.1226 17.0296 13.1226 17.7786 13.1226 18.5114 13.1226zM7.51931 13.1226C7.51931 14.0384 7.51931 14.9376 7.50303 15.8534 7.50303 16.0033 7.56816 16.2031 7.40533 16.303 7.22622 16.4029 7.11224 16.253 6.98197 16.1365 6.60746 15.7868 6.23296 15.7701 5.84217 16.1032 5.72818 16.2031 5.56535 16.3529 5.41881 16.2863 5.20713 16.1864 5.30483 15.9533 5.30483 15.7868 5.28854 14.9043 5.28854 14.0051 5.28854 13.1226 6.03756 13.1226 6.78658 13.1226 7.51931 13.1226z"/> 
				</svg> 
				<span class="roller__title-text">Less container load</span> 
			</p> 
				<div class="swiper-container"> 
					<div class="swiper-wrapper">
						<a class="leads swiper-slide" target="_blank" href="shipping/list/qingdao_port_cn/bilbao_port_es_1.html">
						<div class="leads__wrapper">
							<div class="leads__date">
								<span class='color2'>9 hours</span>
							</div>
							<div class="leads__route">
								<div class="leads__content leads__content_from"> <i class="leads__iconFlag flag-icon flag-icon-cn"></i> 
									<span class="leads__text" title="Qingdao">Qingdao</span> 
								</div> 
								<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
									<path class="c-arrow__line" d="M1 5h7"/> 
									<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
								</svg> 
								<div class="leads__content leads__content_to"> 
									<i class="leads__iconFlag flag-icon flag-icon-es"></i> 
									<span class="leads__text" title="Bilbao">Bilbao</span> 
								</div>
							</div>
						</div>
					</a>
					<a class="leads swiper-slide" target="_blank" href="shipping/list/shenzhen_port_cn/benbrook_tx_76132_usa_us_1.html">
						<div class="leads__wrapper">
							<div class="leads__date">
								<span class='color2'>17 hours</span>
							</div>
							<div class="leads__route">
								<div class="leads__content leads__content_from"> 
									<i class="leads__iconFlag flag-icon flag-icon-cn"></i> 
									<span class="leads__text" title="Shenzhen">Shenzhen</span> 
								</div> 
								<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
									<path class="c-arrow__line" d="M1 5h7"/> 
									<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
								</svg> 
							<div class="leads__content leads__content_to"> 
								<i class="leads__iconFlag flag-icon flag-icon-us">
								</i> 
							<span class="leads__text" title="Benbrook">Benbrook</span> 
						</div>
					</div>
				</div>
			</a>
			<a class="leads swiper-slide" target="_blank" href="shipping/list/attleborough_nr17_uk_gb/manaus_port_br_1.html">
				<div class="leads__wrapper">
					<div class="leads__date">
						<span class='color2'>17 hours</span>
					</div>
					<div class="leads__route">
						<div class="leads__content leads__content_from"> <i class="leads__iconFlag flag-icon flag-icon-gb"></i> 
							<span class="leads__text" title="Attleborough NR17">Attleborough NR17</span> 
						</div> 
						<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
						<div class="leads__content leads__content_to"> 
							<i class="leads__iconFlag flag-icon flag-icon-br"></i> 
							<span class="leads__text" title="Manaus">Manaus</span> 
						</div>
					</div>
				</div>
			</a>
			<a class="leads swiper-slide" target="_blank" href="shipping/list/odessa_port_ua/douala_port_cm_1.html">
				<div class="leads__wrapper">
					<div class="leads__date">
						<span class='color2'>17 hours</span>
					</div>
					<div class="leads__route">
						<div class="leads__content leads__content_from"> <i class="leads__iconFlag flag-icon flag-icon-ua"></i> 
							<span class="leads__text" title="Odessa">Odessa</span> 
						</div> 
						<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
						<div class="leads__content leads__content_to"> <i class="leads__iconFlag flag-icon flag-icon-cm"></i> 
							<span class="leads__text" title="Douala">Douala</span> 
						</div>
					</div>
				</div>
			</a>
			<a class="leads swiper-slide" target="_blank" href="shipping/list/blackburn_gb/adelaide_au_1.html">
				<div class="leads__wrapper">
					<div class="leads__date">
						<span class='color2'>21 hours</span>
					</div>
					<div class="leads__route">
						<div class="leads__content leads__content_from"> <i class="leads__iconFlag flag-icon flag-icon-gb"></i> 
							<span class="leads__text" title="Blackburn">Blackburn</span> 
						</div> 
						<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
						<div class="leads__content leads__content_to"> <i class="leads__iconFlag flag-icon flag-icon-au"></i> 
							<span class="leads__text" title="Adelaide">Adelaide</span> 
						</div>
					</div>
				</div>
			</a>
			</div>
		</div> 
		<p class="roller__info"> 
			<span class="roller__text">Submit a form for cargo volumes from one cubic meter up to 20m³. LCL shipment is the most economical way to ship small cargo...</span> 
			<a class='roller__link' href='about/lcl-less-container-load-international-freight-shipment.html' target="_blank">Learn more</a> 
		</p> 
	</div> 
			<div class="requests__roller | roller"> 
				<p class="roller__title"> 
					<svg class="roller__title-icon | icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
						<path d="M21 6.5V5.5C21 5.22656 20.7734 5 20.5 5H3.5C3.22656 5 3 5.22656 3 5.5V6.5C3 6.77344 3.22656 7 3.5 7V17C3.22656 17 3 17.2266 3 17.5V18.5C3 18.7734 3.22656 19 3.5 19H20.5C20.7734 19 21 18.7734 21 18.5V17.5C21 17.2266 20.7734 17 20.5 17V7C20.7734 7 21 6.77344 21 6.5ZM6.5 17H5.5V7H6.5V17ZM9.5 17H8.5V7H9.5V17ZM12.5 17H11.5V7H12.5V17ZM15.5 17H14.5V7H15.5V17ZM18.5 17H17.5V7H18.5V17Z" fill="#C9CFDB"/> 
					</svg> 
					<span class="roller__title-text">Full container load</span> 
				</p> 
				<div class="swiper-container"> 
					<div class="swiper-wrapper">
						<a class="leads swiper-slide" target="_blank" href="shipping/list/shanghai_china_cn/lat_krabang_bangkok_thailand_th_1.html">
							<div class="leads__wrapper">
								<div class="leads__date">
									<span class='color2'>3 hours</span>
								</div>
								<div class="leads__route">
									<div class="leads__content leads__content_from"> 
										<i class="leads__iconFlag flag-icon flag-icon-cn"></i> 
										<span class="leads__text" title="Shanghai">Shanghai</span> 
									</div> 
									<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
										<path class="c-arrow__line" d="M1 5h7"/> 
										<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
									</svg> 
									<div class="leads__content leads__content_to"> 
										<i class="leads__iconFlag flag-icon flag-icon-th"></i> 
										<span class="leads__text" title="Lat Krabang">Lat Krabang</span> 
									</div>
								</div>
							</div>
						</a>
						<a class="leads swiper-slide" target="_blank" href="shipping/list/chennai_port_in/jebel_ali_port_ae_1.html">
							<div class="leads__wrapper">
								<div class="leads__date">
									<span class='color2'>3 hours</span>
								</div>
								<div class="leads__route">
									<div class="leads__content leads__content_from"> 
										<i class="leads__iconFlag flag-icon flag-icon-in"></i> 
										<span class="leads__text" title="Chennai">Chennai</span> 
									</div> 
									<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
										<path class="c-arrow__line" d="M1 5h7"/> 
										<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
									</svg> 
									<div class="leads__content leads__content_to"> 
										<i class="leads__iconFlag flag-icon flag-icon-ae"></i> 
										<span class="leads__text" title="Jebel Ali">Jebel Ali</span> 
									</div>
								</div>
							</div>
						</a>
						<a class="leads swiper-slide" target="_blank" href="shipping/list/jebel_ali_port_ae/matadi_port_cd_1.html">
							<div class="leads__wrapper">
								<div class="leads__date">
									<span class='color2'>3 hours</span>
								</div>
								<div class="leads__route">
									<div class="leads__content leads__content_from"> 
										<i class="leads__iconFlag flag-icon flag-icon-ae"></i> 
										<span class="leads__text" title="Jebel Ali">Jebel Ali</span> 
									</div> 
									<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
										<path class="c-arrow__line" d="M1 5h7"/> 
										<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
									</svg> 
									<div class="leads__content leads__content_to"> 
										<i class="leads__iconFlag flag-icon flag-icon-cd"></i> 
										<span class="leads__text" title="Matadi">Matadi</span> 
									</div>
								</div>
							</div>
						</a>
			<a class="leads swiper-slide" target="_blank" href="shipping/list/siddiq_wahab_rd_police_lines_quarters_karachi_karachi_city_sindh_pakistan_pk/southampton_gb_1.html">
				<div class="leads__wrapper">
					<div class="leads__date">
						<span class='color2'>3 hours</span>
					</div>
					<div class="leads__route">
						<div class="leads__content leads__content_from"> 
							<i class="leads__iconFlag flag-icon flag-icon-pk"></i> 
							<span class="leads__text" title="Siddiq Wahab Rd">Siddiq Wahab Rd</span> 
						</div> 
						<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
						<div class="leads__content leads__content_to"> 
							<i class="leads__iconFlag flag-icon flag-icon-gb"></i> 
							<span class="leads__text" title="Southampton">Southampton</span> 
						</div>
					</div>
				</div>
			</a>
			<a class="leads swiper-slide" target="_blank" href="shipping/list/bassens_port_fr/valparaiso_port_cl_1.html">
				<div class="leads__wrapper">
					<div class="leads__date">
						<span class='color2'>3 hours</span>
					</div>
					<div class="leads__route">
						<div class="leads__content leads__content_from"> 
							<i class="leads__iconFlag flag-icon flag-icon-fr"></i> 
							<span class="leads__text" title="Bassens">Bassens</span> 
						</div> 
						<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
						<div class="leads__content leads__content_to"> 
							<i class="leads__iconFlag flag-icon flag-icon-cl"></i> 
							<span class="leads__text" title="Valparaiso">Valparaiso</span> 
						</div>
					</div>
				</div>
			</a>
		</div>
	</div> 
	<p class="roller__info"> 
		<span class="roller__text">Transportation in ocean containers (FCL). A whole container is utlised for one consignee. Submit a rate request form for a type of container.</span> 
		<a class='roller__link' href='about/fcl-full-container-load-international-freight-shipment.html' target="_blank">Learn more</a> 
	</p> 
</div> 
<div class="requests__roller | roller"> 
	<p class="roller__title"> 
		<svg class="roller__title-icon | icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
			<path d="M19.0971 21.7039H3.67381C2.36079 21.7039 1.55448 20.2743 2.26356 19.178L8.88673 8.93763C9.19598 8.45927 10.0067 8.45927 10.3159 8.93763L14.16 14.8812L15.3549 13.0339C15.7283 12.4564 16.5827 12.4564 16.9562 13.0339L20.6985 18.82C21.5057 20.0681 20.5974 21.7039 19.0971 21.7039Z" fill="#C9CFDB"/> 
		</svg> 
	<span class="roller__title-text">In Bulk</span> 
</p> 
<div class="swiper-container"> 
	<div class="swiper-wrapper">
		<a class="leads swiper-slide" target="_blank" href="shipping/list/alexandria_port_eg/benghazi_port_ly_1.html">
			<div class="leads__wrapper">
				<div class="leads__date">
					<span class='color2'>11 hours</span>
				</div>
				<div class="leads__route">
					<div class="leads__content leads__content_from"> 
						<i class="leads__iconFlag flag-icon flag-icon-eg"></i> 
						<span class="leads__text" title="Alexandria">Alexandria</span> 
					</div> 
					<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
					<div class="leads__content leads__content_to"> 
						<i class="leads__iconFlag flag-icon flag-icon-ly"></i> 
						<span class="leads__text" title="Benghazi">Benghazi</span> 
					</div>
				</div>
			</div>
		</a>
		<a class="leads swiper-slide" target="_blank" href="shipping/list/nhava_sheva_navi_mumbai_maharashtra_400702_india_in/tema_port_gh_1.html">
			<div class="leads__wrapper">
				<div class="leads__date">
					<span class='color2'>17 hours</span>
				</div>
				<div class="leads__route">
					<div class="leads__content leads__content_from"> <i class="leads__iconFlag flag-icon flag-icon-in"></i> 
						<span class="leads__text" title="Nhava Sheva">Nhava Sheva</span> 
					</div> 
					<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
					<div class="leads__content leads__content_to"> <i class="leads__iconFlag flag-icon flag-icon-gh"></i> 
						<span class="leads__text" title="Tema">Tema</span> 
					</div>
				</div>
			</div>
		</a>
		<a class="leads swiper-slide" target="_blank" href="shipping/list/beira_port_mz/kandla_port_in_1.html">
			<div class="leads__wrapper">
				<div class="leads__date">
					<span class='color2'>18 hours</span>
				</div>
				<div class="leads__route">
					<div class="leads__content leads__content_from"> <i class="leads__iconFlag flag-icon flag-icon-mz"></i> 
						<span class="leads__text" title="Beira">Beira</span> 
					</div> 
						<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
						<div class="leads__content leads__content_to"> 
							<i class="leads__iconFlag flag-icon flag-icon-in"></i> 
							<span class="leads__text" title="Kandla">Kandla</span> 
						</div>
					</div>
				</div>
			</a>
			<a class="leads swiper-slide" target="_blank" href="shipping/list/fujairah___united_arab_emirates_ae/chittagong_port_bd_1.html">
			<div class="leads__wrapper">
				<div class="leads__date">
					<span class='color2'>18 hours</span>
				</div>
			<div class="leads__route">
				<div class="leads__content leads__content_from"> 
					<i class="leads__iconFlag flag-icon flag-icon-ae"></i> 
					<span class="leads__text" title="Fujairah - United Arab Emirates">Fujairah - United Arab Emirates</span> 
				</div> 
					<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
					<div class="leads__content leads__content_to"> 
						<i class="leads__iconFlag flag-icon flag-icon-bd"></i> 
						<span class="leads__text" title="Chittagong">Chittagong</span> 
					</div>
				</div>
			</div>
		</a>
		<a class="leads swiper-slide" target="_blank" href="shipping/list/sohar_port_om/latakia_port_sy_1.html">
			<div class="leads__wrapper">
				<div class="leads__date">
					<span class='color2'>21 hours</span>
				</div>
				<div class="leads__route">
					<div class="leads__content leads__content_from"> 
						<i class="leads__iconFlag flag-icon flag-icon-om"></i> 
						<span class="leads__text" title="Sohar">Sohar</span> 
					</div> 
					<svg class="c-arrow leads__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
				<div class="leads__content leads__content_to"> 
					<i class="leads__iconFlag flag-icon flag-icon-sy"></i> 
					<span class="leads__text" title="Latakia">Latakia</span> 
				</div>
			</div>
		</div>
	</a>
</div>
</div> 
<p class="roller__info"> 
	<span class="roller__text">Break bulk cargo, bulk cargoes, project cargo and heavy lift, military equipment or almost any other oversized or overweight cargo.</span> 
		<a class='roller__link' target="_blank" href='about/breakbulk.html'>Learn more</a> 
	</p> 
</div> 
</div> 
<div class="requests__footer"> 
	<a class="requests__link | c-button c-button_link" href="shipping/list/index.html"> 
		<span>View all shipping leads</span> 
		<svg class="c-arrow " viewBox="0 0 10 10" aria-hidden="true"> 
			<path class="c-arrow__line" d="M1 5h7"/> 
			<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
		</svg> 
	</a> 
	<a class="requests__button | c-button" href="shipping/request/index.html"> Request a Quote </a> 
</div> 
</div> 
</section> 
<section class='advantages | section'> 
	<div class='myContainer'> 
		<div class='advantages__wrapper'> 
			<div class='advantages__box'> 
				<h3 class="advantages__title | title title_size-l">Our advantages</h3> 
			</div> 
			<div class='advantages__items'> 
				<div class='advantages__item'> 
					<div class='advantages__header'> 
						<h4 class='advantages__name advantages__name_color-purple'>Get access to the world’s largest shipping service platform</h4> 
					</div> 
					<p class="advantages__text">Would you like to transport cargo by ship? FCL or LCL? Bulk or Break Bulk? Everything you need for shipping can be found on SeaRates.com. We have gathered a full range of shipping services and put them in one place. Instantly compare ocean and trucking freight quotes from the most popular logistics providers.</p> 
				</div> 
				<div class='advantages__item'> 
					<div class='advantages__header advantages__header_color-purple'> 
						<h4 class='advantages__name'>Take advantage of the market’s lowest rates</h4> 
					</div> 
					<p class="advantages__text">Affordable pricing of shipping services is what we constantly strive for. At SeaRates.com you will find cheap rates to any country, from the world's top freight forwarders, saving you time and money. Why spend a lot of resource and energy on negotiations to get the best shipping rate? Find and book them online at SeaRates.com.</p> 
				</div> 
				<div class='advantages__item'> 
					<div class='advantages__header advantages__header_color-purple'> 
						<h4 class='advantages__name'>Enjoy discounts for frequent customers</h4> 
					</div> 
					<p class="advantages__text">We value our frequent customers and provide shipping rates with discounts for those who qualify. We provide special promotions in the form of promotional codes depending on your orders & routes. To get a promo code, fill out the quotation request form.</p> 
				</div> 
				<div class='advantages__item'> 
					<div class='advantages__header advantages__header_color-purple'> 
						<h4 class='advantages__name'>Benefit from end-to-end client support</h4> 
					</div> 
					<p class="advantages__text">24 hours a day, 7 days a week, 365 days a year! We understand how important it is to support our customers while arranging their cargo movement, delivery and customs clearance. Our Customer Care Service is always available to support on all issues relating to freight, weight, routing, rates, inland haulage and documentation.</p> 
				</div> 
			</div> 
		</div> 
	</div> 
</section> 
<section class='brands | section'> 
	<div class='myContainer'> 
		<h3 class="brands__title | title title_size-m">SEARATES CUSTOMERS</h3> 
			<div class='brands__slider | swiper-container js-brands-slider'> 
				<div class='swiper-wrapper'> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand1.png')}}" alt="brand1" width="174" height="72"> 
						</picture> 
					</div> 
					<div class="brands__item | swiper-slide"> <picture class="brands__logo"> 
						<img src="{{asset('design/images/index/brands/brand2.png')}}" alt="brand2" width="174" height="72"> </picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand3.png')}}" alt="brand3" width="174" height="72"> 
						</picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand4.png')}}" alt="brand4" width="174" height="72"> 
						</picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand5.png')}}" alt="brand5" width="174" height="72"> </
							picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand6.png')}}" alt="brand6" width="174" height="72"> </
							picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand7.png')}}" alt="brand7" width="174" height="72"> </
							picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand8.png')}}" alt="brand8" width="174" height="72"> </
							picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand9.png')}}" alt="brand9" width="174" height="72"> </
							picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand10.png')}}" alt="brand10" width="174" height="72"> 
						</picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand11.png')}}" alt="brand11" width="174" height="72"> 
						</picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand12.png')}}" alt="brand12" width="174" height="72"> 
						</picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand13.png')}}" alt="brand13" width="174" height="72"> 
						</picture> 
					</div> 
					<div class="brands__item | swiper-slide"> 
						<picture class="brands__logo"> 
							<img src="{{asset('design/images/index/brands/brand14.png')}}" alt="brand14" width="174" height="72"> 
						</picture> 
					</div> 
				</div> 
				<div class="brands__pagination | sliderPagination swiper-pagination">
				</div> 
			</div> 
		</div> 
	</section> 
	<section class='banner | section'> 
		<div class='myContainer'> 
			<div class='banner__wrapper'> 
				<div class='banner__body'> 
					<h3 class="banner__title"> 
						<span class="banner__title-text banner__title-text_color">Combine everything in</span> 
						<span class="banner__title-text">one place</span> 
					</h3> 
					<p class="banner__text">Search from more than 500,000 ocean freight quotes and get the latest international shipping rates from any carrier in seconds. With us you get a launching pad for your supply chain, and with it the effectiveness, control and transparency of your business. </p> 
					<div class="banner__action"> 
						<a class='banner__button | c-button c-button_secondary' href='freight/index.html' target="_blank"> Get started </a> 
					</div> 
				</div> 
			</div> 
		</div> 
	</section> 
	<section class='blog | section'> 
		<div class='myContainer'> 
			<div class='blog__header'> 
				<h3 class="blog__title | title title_size-l">Latest news</h3> 
				<a class='blog__link | c-button c-button_link' href='blog/index.html'> 
					<span class="blog__link-text">View all articles</span> 
					<svg class="c-arrow " viewBox="0 0 10 10" aria-hidden="true"> 
						<path class="c-arrow__line" d="M1 5h7"/> 
						<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
					</svg> 
				</a> 
			</div> 
		</div> 
		<div class='blog__container | myContainer'> 
			<div class='blog__wrapper'> 
				<a class='blog__post' target="_blank" href="blog/post/everything-you-need-to-know-about-shipping-from-hong-kong-to-the-usa.html"> 
					<div class="blog__inner"> 
						<h4 class="blog__name"> 
							<span class="blog__name-text">Everything You Need to Know About Shipping from Hong Kong to the USA</span> 
							<svg class="c-arrow blog__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
								<path class="c-arrow__line" d="M1 5h7"/> 
								<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
							</svg> 
						</h4> 
						<div class='blog__info'> 
							<span class="blog__category" title="Shipping & Logistics">Shipping & Logistics</span> 
							<span class="blog__dot"></span> 
							<span class='blog__date'>Sep 13, 2021</span> 
						</div>
					</div> 
				</a> 
				<a class='blog__post' target="_blank" href="blog/post/searates-updates-week-36-2021.html"> 
					<div class="blog__inner"> 
						<h4 class="blog__name"> 
							<span class="blog__name-text">SeaRates Updates - Week 36, 2021</span> 
							<svg class="c-arrow blog__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
								<path class="c-arrow__line" d="M1 5h7"/> 
								<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
							</svg> 
						</h4> 
						<div class='blog__info'> 
							<span class="blog__category" title="Innovations">Innovations</span> 
							<span class="blog__dot"></span> 
							<span class='blog__date'>Sep 13, 2021</span> 
						</div> 
					</div> 
				</a> 
				<a class='blog__post' target="_blank" href="blog/post/searates-updates-week-35-2021.html"> 
				<div class="blog__inner"> 
					<h4 class="blog__name"> 
						<span class="blog__name-text">SeaRates Updates - Week 35, 2021</span> 
						<svg class="c-arrow blog__arrow" viewBox="0 0 10 10" aria-hidden="true"> 
							<path class="c-arrow__line" d="M1 5h7"/> 
							<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
						</svg> 
					</h4> 
				<div class='blog__info'> 
					<span class="blog__category" title="Innovations">Innovations</span> 
					<span class="blog__dot"></span> 
					<span class='blog__date'>Sep 06, 2021</span> 
				</div> 
			</div> 
		</a> 
	</div> 
</div> 
<a class='blog__link blog__link_mobile | c-button c-button_link' href='blog/index.html'> 
	<span class="blog__link-text">View all articles</span> 
	<svg class="c-arrow " viewBox="0 0 10 10" aria-hidden="true"> 
		<path class="c-arrow__line" d="M1 5h7"/> 
		<path class="c-arrow__tip" d="M2 1l4 4-4 4"/> 
	</svg> 
</a> 
</section> 
</div> 
	<div class="cookies | js-cookies"> 
		<div class="cookies__inner"> 
			<p class="cookies__text"> 
				<span>By using this website, you agree to</span> 
			<a target="_blank" href="privacy/index.html">our privacy policy</a> 
			</p> 
			<a class="cookies__button | js-cookies-button">OK</a> 
		</div> 
	</div> 
	<div data-contact='{"subject":"Subscribe on blog","platform":"searates","modal":false,"subscribe":"Subscribe<br>to our weekly digest"}' id="contact-app" >
</div>
<script src="../code.tidio.co/giaunxk0rsobv8eyasofunx5vy86rfhx.js" async></script> 
</div>
	@endsection
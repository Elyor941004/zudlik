@extends('layouts.main')
	@section('content')
<div class="main-content"> 
	<style>
  .main-content {
      display: flex;
      flex-direction: column;
  }
	</style> 
	<script>/*<![CDATA[*/localStorage.removeItem('s-token');/*]]>*/</script> 
	<div id="marketplace" data-filter='{"platform":1,"currency":"USD"}'>
	</div> 
	<div id="contact-app" data-contact='{"subject":"LE subscription","addressVisible":true,"platform":"searates","modal":true,"timer":40,"small":true}'>
	</div> 
</div> 
<footer class="footer"> 
	<div class="container-no-bt"> 
	<div class="footer__nav"> 
	<div class="footer__column"> <p class="footer__button-lang" data-toggle="modal" data-target="#langModal"> <span class="footer__icon-lang"></span> <span class="footer__text-lang">English</span> </p> 
	<div class="footer__social"> <a class="footer__social-item footer__social-item_twitter" href="https://twitter.com/wwwSEARATEScom"></a> <a class="footer__social-item footer__social-item_facebook" href="https://www.facebook.com/searates/"></a> <a class="footer__social-item footer__social-item_youtube" href="https://www.youtube.com/channel/UC-riN9Wesr6jbxi1DUTjFJQ"></a> <a class="footer__social-item footer__social-item_instagram" href="https://www.instagram.com/searatesllc/"></a> <a class="footer__social-item footer__social-item_linkedin" href="https://www.linkedin.com/company/searates/"></a> 
	</div> 
</div> 
<div class="footer__column"> 
	<div class="footer__title">Tools
	</div> 
<div class="footer__list"> <a class="footer__item" href="services/logistics-explorer/index.html">Logistics Explorer</a> <a class="footer__item" href="services/learn-more/index.html">Container Tracking</a> <a class="footer__item" href="reference/load-calc-about/index.html">Load Calculator</a> <a class="footer__item" href="services/schedules/index.html">Ship Schedules</a> <a class="footer__item" href="services/distances-time/index.html">Distances and Time</a> <a class="footer__item" href="smart-documents/index.html">Smart Documents</a> <a class="footer__item" href="route-planner/index.html">Route Planner</a> 
</div> 
</div> 
<div class="footer__column"> 
	<div class="footer__title">Opportunities
	</div> 
<div class="footer__list"> <a class="footer__item" href="shipping/for-shippers/index.html">For Shippers</a> <a class="footer__item" href="shipping/for-carriers/index.html">For Carriers</a> <a class="footer__item" href="services/plans/index.html">Integrations</a> <a class="footer__item" href="reference/api/index.html">API Integrations</a> 
</div> 
</div> 
<div class="footer__column"> 
	<div class="footer__title">Company
	</div> 
<div class="footer__list"> <a class="footer__item" href="blog/index.html">Blog</a> <a class="footer__item" href="contact/careers/index.html">Careers</a> <a class="footer__item" href="about/searates-copyright/index.html">Copyright</a> <a class="footer__item" href="contact/shippers-help/index.html">Help</a> 
</div> 
</div> 
<div class="footer__column"> 
	<div class="footer__title">Resources
	</div> 
<div class="footer__list"> <a class="footer__item" href="contact/index.html">Contact us</a> <a class="footer__item" href="tel:+18886600703">+1 888 66 00 703</a> <a class="footer__item" href="tos/index.html">Terms of service</a> <a class="footer__item" href="privacy/index.html">Privacy Policy</a> 
</div> 
</div> 
</div> 
<div class="footer__description"> Founded in August of 2005, SeaRates is a trusted community marketplace for people to send goods around the world. SeaRates.com helps to arrange the international cargo delivery from 1m³ or 50 kg till shiploads. Thanks to world-class customer service and a growing community of cargo agents, SeaRates.com is the easiest way for people to ship their goods overseas, or to offer free space in the container, truck or vessel to millions of consignors. 
</div> 
<div class="footer__breadcrumbs breadcrumbs"> 
	<div class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <a class="breadcrumbs__item-text breadcrumbs__item-text_link" itemprop="item" href="index.html"><span itemprop="name">SeaRates.com</span></a> <meta itemprop="position" content="1"/> 
	</div> 
<div class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <h4 class="breadcrumbs__item-text" itemprop="title"><span>Online Freight Marketplace</span></h4> <meta itemprop="position" content="2"/> 
</div> 
</div> <span class="footer__searates">2021 © SeaRates. All rights reserved.</span> 
</div> </footer> 
<div class="langModal | modal" id="langModal" tabindex="-1" role="dialog" aria-hidden="true"> 
	<div class="langModal__wrapper"> 
	<div class="langModal__container | container-no-bt"> 
	<div class="langModal__header"> <img class="langModal__logo" src="design/images/searates-logo.svg" width="130" height="31" alt="logo SeaRates"> <button class="langModal__button-close" type="button" data-dismiss="modal" aria-label="Close"> <i class="far fa-times"></i> </button> 
	</div> 
<div class="langModal__body"> <h3 class="langModal__title">Choose language:</h3> 
	<div class="langModal__items"> <a class="langModal__item langModal__item_active" href="freight.html"> <i class="langModal__icon | flag-icon flag-icon-en"></i> <span class="langModal__text">English</span> </a> <a class="langModal__item " href="ru/freight.html"> <i class="langModal__icon | flag-icon flag-icon-ru"></i> <span class="langModal__text">Pусский</span> </a> <a class="langModal__item " href="ua/freight.html"> <i class="langModal__icon | flag-icon flag-icon-ua"></i> <span class="langModal__text">Українська</span> </a> <a class="langModal__item " href="de/freight.html"> <i class="langModal__icon | flag-icon flag-icon-de"></i> <span class="langModal__text">Deutsch</span> </a> <a class="langModal__item " href="es/freight.html"> <i class="langModal__icon | flag-icon flag-icon-es"></i> <span class="langModal__text">Español</span> </a> <a class="langModal__item " href="cn/freight.html"> <i class="langModal__icon | flag-icon flag-icon-cn"></i> <span class="langModal__text">中文</span> </a> <a class="langModal__item " href="fr/freight.html"> <i class="langModal__icon | flag-icon flag-icon-fr"></i> <span class="langModal__text">Français</span> </a> <a class="langModal__item " href="ar/freight.html"> <i class="langModal__icon | flag-icon flag-icon-sa"></i> <span class="langModal__text">عربي</span> </a> <a class="langModal__item " href="tr/freight.html"> <i class="langModal__icon | flag-icon flag-icon-tr"></i> <span class="langModal__text">Türkçe</span> </a> <a class="langModal__item " href="it/freight.html"> <i class="langModal__icon | flag-icon flag-icon-it"></i> <span class="langModal__text">Italiano</span> </a> <a class="langModal__item " href="th/freight.html"> <i class="langModal__icon | flag-icon flag-icon-th"></i> <span class="langModal__text">ไทย</span> </a> <a class="langModal__item " href="ge/freight.html"> <i class="langModal__icon | flag-icon flag-icon-ge"></i> <span class="langModal__text">ქართული</span> </a> <a class="langModal__item " href="ir/freight.html"> <i class="langModal__icon | flag-icon flag-icon-ir"></i> <span class="langModal__text">فارسی</span> </a> <a class="langModal__item " href="kr/freight.html"> <i class="langModal__icon | flag-icon flag-icon-kr"></i> <span class="langModal__text">한국어</span> </a> <a class="langModal__item " href="jp/freight.html"> <i class="langModal__icon | flag-icon flag-icon-jp"></i> <span class="langModal__text">日本語</span> </a> <a class="langModal__item " href="il/freight.html"> <i class="langModal__icon | flag-icon flag-icon-il"></i> <span class="langModal__text">עברית</span> </a> <a class="langModal__item " href="gr/freight.html"> <i class="langModal__icon | flag-icon flag-icon-gr"></i> <span class="langModal__text">Ελληνικά</span> </a> <a class="langModal__item " href="pl/freight.html"> <i class="langModal__icon | flag-icon flag-icon-pl"></i> <span class="langModal__text">Polski</span> </a> <a class="langModal__item " href="vi/freight.html"> <i class="langModal__icon | flag-icon flag-icon-vn"></i> <span class="langModal__text">Người việt nam</span> </a> <a class="langModal__item " href="pt/freight.html"> <i class="langModal__icon | flag-icon flag-icon-pt"></i> <span class="langModal__text">Português</span> </a> 
	</div> 
</div> 
</div> 
</div>
@endsection
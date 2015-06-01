<!DOCTYPE html>
<html lang="en-GB">
<head>
  <?php
    if (isset($title)) {
        $this->assign('title', $title);
    }
  ?>
	<?= $this->Html->charset() ?>
  <meta name="viewport" content="initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $this->fetch('title') ?></title>
  <meta name="description" content="<?=$description_for_layout;?>">
  <link rel="canonical" href="<?php echo $this->Url->build(null, true); ?>">
  <link rel="publisher" href="https://plus.google.com/109073909303187868957/">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <meta property="og:locale" content="en_IRL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= $this->fetch('title') ?>">
  <meta property="og:description" content="<?= $description_for_layout; ?>">
  <meta property="og:url" content="<?php echo $this->Url->build(null, true) ?>">
  <meta property="og:site_name" content="Hotelier Academy">
	<meta property="article:publisher" content="http://www.facebook.com/hotelieracademy">
	<meta property="og:image" content="http://www.hotelieracademy.com/images/embed-logo.png">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:description" content="<?= $description_for_layout; ?>">
	<meta name="twitter:title" content="<?= $this->fetch('title') ?>">
	<meta name="twitter:url" content="<?php echo $this->Url->build(null, true) ?>">
	<meta name="twitter:site" content="@hotelieracademy">
	<meta name="twitter:image" content="http://www.hotelieracademy.com/images/embed-logo.png">

  <style type="text/css">html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}strong{font-weight:700}h1{margin:.67em 0}sup{line-height:0;position:relative;vertical-align:baseline}img{border:0}button{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button;cursor:pointer}button::-moz-focus-inner{border:0;padding:0}@media print{:after,:before{background:transparent!important;color:#000!important;-webkit-box-shadow:none!important;box-shadow:none!important;text-shadow:none!important}}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{line-height:1.42857143}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}img{vertical-align:middle}.img-responsive{display:block;max-width:100%;height:auto}h1,h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1,h2,h3{margin-top:20px;margin-bottom:10px}h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}ul{margin-top:0;margin-bottom:10px}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.col-md-12,.col-md-3,.col-md-6,.col-md-9,.col-sm-3,.col-sm-5,.col-sm-7,.col-sm-9{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:768px){.col-sm-3,.col-sm-5,.col-sm-7,.col-sm-9{float:left}.col-sm-9{width:75%}.col-sm-7{width:58.33333333%}.col-sm-5{width:41.66666667%}.col-sm-3{width:25%}.col-sm-push-5{left:41.66666667%}}@media (min-width:992px){.col-md-12,.col-md-3,.col-md-6,.col-md-9{float:left}.col-md-12{width:100%}.col-md-9{width:75%}.col-md-6{width:50%}.col-md-3{width:25%}.col-md-push-6{left:50%}}.btn{display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.42857143;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.collapse{display:none;visibility:hidden}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1);-webkit-overflow-scrolling:touch}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;visibility:visible!important;height:auto!important;padding-bottom:0;overflow:visible!important}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header{margin-right:0;margin-left:0}}.navbar-brand{float:left;padding:15px;font-size:18px;line-height:20px;height:50px}@media (min-width:768px){.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-default{background-color:#f8f8f8}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e7e7e7}.container-fluid:after,.container-fluid:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before{content:" ";display:table}.container-fluid:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after{clear:both}.visible-xs{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}}@font-face{font-family:FontAwesome;src:url(../fonts/fontawesome-webfont.eot?v=4.1.0);src:url(../fonts/fontawesome-webfont.eot?#iefix&v=4.1.0) format('embedded-opentype'),url(../fonts/fontawesome-webfont.woff?v=4.1.0) format('woff'),url(../fonts/fontawesome-webfont.ttf?v=4.1.0) format('truetype'),url(../fonts/fontawesome-webfont.svg?v=4.1.0#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-chevron-right:before{content:"\f054"}.fa-mobile:before{content:"\f10b"}body{font-size:16px;background:none repeat scroll 0 0 #fff;color:#4c4c4c;font-family:Roboto,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}h1,h2,h3{font-weight:100}@media(max-width:767px){h1{font-size:32px}}p{line-height:26px}sup{top:-.75em;font-size:55%}.highlight-prim{color:#e4195e}.btn-prim{background-color:#e4195e;border-color:#e4195e;color:#FFF!important}.back-to-top{background-color:rgba(235,235,235,.8);bottom:2em;color:#000;display:none;font-size:12px;padding:1em;position:fixed;right:0;text-decoration:none}.logo{font-weight:100}.logo-sprite{background:url(../img/logo-sprite.png)}@media (min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(-webkit-min-device-pixel-ratio:1.5),(min-device-pixel-ratio:1.5),(min-resolution:1.5dppx){.logo-sprite{background:url(../img/logo-sprite@x2.png);background-size:300px 169px}}.navbar{background:#fff;padding-left:0;border-radius:0;margin-top:15px}@media (max-width:767px){.navbar{margin-bottom:0}}.navbar-default{border:none}@media (max-width:767px){nav .navbar-header{margin-bottom:20px}}.navbar .navbar-brand{padding:0;width:223px;height:60px;background-position:0 -32px;margin-left:15px!important}.collapse.navbar-collapse{margin-top:15px}@media(min-width:768px){.nav-utility{float:right}}.navbar .nav>li>a{text-shadow:none;text-transform:uppercase;color:#22262f;font-size:16px}.navbar-default .navbar-nav>.active>a{background:0 0;color:#e4195e!important}.phone-contact span{font-weight:700}@media (min-width:768px){.navbar .navbar-collapse a .fa-mobile{font-size:30px;vertical-align:middle;margin-top:-.125em}}@media (max-width:767px){.navbar .navbar-collapse{background:#333;color:#fff;padding:0 10px;float:none;margin-top:0}.navbar .navbar-collapse .nav{padding-left:30px;padding-right:30px}.navbar .navbar-collapse .nav li+li{border-top:1px dotted #666}.navbar .navbar-collapse .nav li>a{color:#fff;border:0;padding-left:0}.navbar .navbar-collapse .nav li>a:last-child{margin-bottom:10px;margin-top:10px}.navbar-toggle .icon-bar{background-image:none}}.banner{width:100%;display:block;float:left;position:relative;overflow:hidden}.banner .feature-primary-heading{color:#fff;margin:50px 0}.main-banner{background:url(../img/home-banner.jpg);padding:50px 0;background-attachment:fixed;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-position:center center;background-repeat:no-repeat}@media (max-width:767px){.main-banner{padding:0}}@media (max-device-width :1024px){.main-banner{background-attachment:scroll}}.main-banner .feature-content{filter:alpha(opacity=100);max-width:760px;opacity:1;position:relative;width:100%;float:left}.main-banner .feature-content .feature-primary{background:rgba(228,25,94,.7);padding:0 50px;float:left}@media (max-width:767px){.main-banner .feature-content .feature-primary{padding:0}.main-banner .feature-content .feature-primary h1{font-size:28px;text-align:center;line-height:1.5;margin-bottom:10px}}@media (min-width:768px){.main-banner .feature-content .feature-primary .feature-primary-icon-holder{position:absolute;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);right:5%}}.main-banner .feature-content .feature-primary .feature-primary-icon-holder .feature-primary-icon{width:100px;height:100px;color:#fff;display:block;font-size:2.5em;padding:33px 30px;text-decoration:none;margin:auto;text-align:center;border:1px solid #fff;border-radius:100px}@media (max-width:767px){.main-banner .feature-content .feature-primary .feature-primary-icon-holder .feature-primary-icon{width:80px;height:80px;font-size:2em;padding:23px 25px;margin-bottom:30px}}#content-request{background-color:#019abb;color:#fff;padding:15px 0;clear:both}#content-request h2{float:left;margin-top:10px}#content-request h2 span{font-weight:300}#content-request .btn.btn-contact{color:#333;background-color:#fff;border-color:#fff;padding:3px 48px}@media (min-width:768px){#content-request .btn.btn-contact{float:right}}#content-request .btn span{font-size:21px;color:#e4195e}#content-main h1{font-weight:300;margin-top:40px;margin-bottom:0}#content-main h3{margin-top:10px;margin-bottom:20px}#content-main .lead{font-weight:100}@media (min-width:768px){#content-main{padding:60px 0 80px}#content-main h1{margin-top:50px}#content-main .lead{text-align:right;padding-right:40px;line-height:38px}}.pace{-webkit-pointer-events:none;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none}.pace .pace-progress{background:#df45a4;position:fixed;z-index:2000;top:0;right:100%;width:100%;height:2px}.pace .pace-progress-inner{display:block;position:absolute;right:0;width:100px;height:100%;box-shadow:0 0 10px #df45a4,0 0 5px #df45a4;opacity:1;-webkit-transform:rotate(3deg) translate(0px,-4px);-moz-transform:rotate(3deg) translate(0px,-4px);-ms-transform:rotate(3deg) translate(0px,-4px);-o-transform:rotate(3deg) translate(0px,-4px);transform:rotate(3deg) translate(0px,-4px)}.pace .pace-activity{display:block;position:fixed;z-index:2000;top:15px;right:15px;width:14px;height:14px;border:solid 2px transparent;border-top-color:#df45a4;border-left-color:#df45a4;border-radius:10px;animation:pace-spinner 400ms linear infinite}</style>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <script src="js/main.min.js" async defer="defer"></script>

</head>
<body id="main">
	<header>
	  <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo-sprite" href="/"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li <?php echo (!empty($this->request['action']) && ($this->request['action']=='home') )?'class="active"' :'' ?>><a href="/">Home</a></li>
            <li <?php echo (!empty($this->request['action']) && ($this->request['action']=='trainingCourses') )?'class="active"' :'' ?>><a href="/hotel-training-courses">Courses</a></li>
            <li <?php echo (!empty($this->request['action']) && ($this->request['action']=='features') )?'class="active"' :'' ?>><a href="/feature-tour">Feature Tour</a></li>
            <li <?php echo (!empty($this->request['action']) && ($this->request['action']=='contact') )?'class="active"' :'' ?>><a href="/contact-us">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav nav-utility">
            <li><a href="tel:05175683465" class="phone-contact"><i class="fa fa-mobile"></i> <span>051 98345793</span></a></li>
            <li><a href="/login" class="btn btn-prim">Sign-in</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>

	<?= $this->Flash->render() ?>

	<?php echo $this->fetch('content'); ?>

  <section class="footer-features">
    <span class="light">Why should you use <span class="logo"><strong>Hotelier</strong>Academy<sup>TM</sup></span>?</span>
    <span class="features-list">Efficiency, Significantly Reduce Cost, Increase Productivity, Increase Saftey</span>
  </section>

	<footer>
		<div class="container-fluid">
		  <div class="col-sm-8 col-md-9">
		    <div class="logo-sprite footer-logo"></div>
		    Hotelier Academy 2014. All rights reserved.
		  </div>
		  <div class="col-sm-4 col-md-3">
		    <h4>Follow us on:</h4>
		    <ul class="list-inline">
		      <li class="fa-stack fa-lg">
		      	<a href="https://www.facebook.com/hotelieracademy">
			        <i class="fa fa-circle-thin fa-stack-2x"></i>
			        <i class="fa fa-facebook fa-stack-1x"></i>
		        </a>
		      </li>
		      <li class="fa-stack fa-lg">
		      	<a href="https://twitter.com/HotelierAcademy">
			        <i class="fa fa-circle-thin fa-stack-2x"></i>
			        <i class="fa fa-twitter fa-stack-1x"></i>
		    	</a>
		      </li>
		      <li class="fa-stack fa-lg">
		      	<a href="https://www.linkedin.com/company/hotelier-academy">
			        <i class="fa fa-circle-thin fa-stack-2x"></i>
			        <i class="fa fa-linkedin fa-stack-1x"></i>
            </a>
		      </li>
		    </ul>
		  </div>
		</div>
	</footer>

  <a href="#" class="back-to-top">Back to Top</a>

  <?php
    echo $this->Html->css('style.min');
    echo $this->fetch('css');
  ?>
  <script>
    WebFontConfig = {
      google: { 
        families: ['Roboto:100,300,700', 'Asap:400']
      }
    };
  
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org/",
			"@type": "EducationalOrganization",
			"name": "Hotelier Academy",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "44 The Quay",
				"addressLocality": "Waterford City",
				"addressRegion": "Co. Waterford",
				"addressCountry": "Ireland"
			},
			"telephone": "(425) 123-4567",
			"url": "http://www.hotelieracademy.com/",
			"logo": "http://www.hotelieracademy.com/img/logo.png"
		}
	</script>
</body>
</html>

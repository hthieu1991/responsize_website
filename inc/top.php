<?php include("class/define.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <meta content="<?php echo $short_content ?>;" name="description">
	<meta content="php, lap trinh php, php tutorials, php programming, php framework, js plugin" name="keywords">
	<link href="http://kungfuphp.com" rel="canonical">
	<meta content="<?php echo $short_content;?>" property="og:description">
	<meta content="http://kungfuphp.com" property="og:url">
	<meta content="https://www.facebook.com/laptrinhkungfu" property="article:publisher">
	<meta http-equiv="content-language" content="vi" />
    <link href="http://<?php echo ROOT; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>	
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=242779775879708&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
  	<!-- Nav Bar -->
  <div class="container">	
      <nav role="navigation" class="navbar navbar-inverse" style="margin-bottom:0px;bg-color">
	      <div class="container-fluid">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button data-target="#bs-example-navbar-collapse-9" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a href="index.php" title="kungfuphp blog" class="navbar-brand">Kungfu PHP</a>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div id="bs-example-navbar-collapse-9" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="index.php" title="kungfuphp home page">Home</a></li>
	            <li><a href="blogs-lap-trinh.php" title="kungfuphp blogs">Blogs</a></li>
	            <li><a href="contact.php" title="kungfuphp contact">Contact</a></li>
	            <li><a href="sitemap.html" title="kungfuphp sitemap">Site Map</a></li>
	          </ul>
	        </div>
	      </div>
    </nav>
	<div class="row">
		<div class="col-sm-9">
			<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>   
	        <div class="carousel-inner">
	            <div class="active item">
	            	<img width="1000" src="http://<?php echo ROOT; ?>/bootstrap/img/background-php-5.jpg">
	                <h2>PHP thuần</h2>
	                <div class="carousel-caption">
	                  <h3>Lập trình PHP cơ bản, nâng cao</h3>
	                  <p>Các bài viết được viết từ cơ bản đến nâng cao một cách rõ ràng, chi tiết, giúp cho bạn có thể học nhanh nhất</p>
	                </div>
	            </div>
	            <div class="item">
	            	<img width="1000" src="http://<?php echo ROOT; ?>/bootstrap/img/background-php-2.jpg">
	                <h2>Php Frameworks</h2>
	                <div class="carousel-caption">
	                  <h3>CI, Zend, Laravel Frameworks</h3>
	                  <p>Các bài viết sưu tầm,các bài phân tích, so sánh ưu nhược điểm của các framework PHP</p>
	                </div>
	            </div>
	            <div class="item">
	            	<img width="1000" src="http://<?php echo ROOT; ?>/bootstrap/img/background-php-4.jpg">
	                <h2>Javascript</h2>
	                <div class="carousel-caption">
	                  <h3>jQuery, Ajax, AngularJs , NodeJs</h3>
	                  <p>Những ghi chú, bài viết ngắn về những gì mình tự tìm hiểu được</p>
	                </div>
	            </div>
	        </div>
	        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	    </div>	
	  </div>
	  <div class="col-sm-3" >
	  	<img style="margin-top:30px;" src="http://<?php echo ROOT; ?>/bootstrap/img/avatar-kungfu-php.jpg" alt="kungfuphp avatar" class="img-rounded">
	  </div>

    </div>
    <div class="row" style="padding-left:13px; padding-right:13px;"> 
    	<a href="http://kungfuphp.com" title="lap trinh php"><img src="http://<?php echo ROOT; ?>/kungfuphp/kungfuphp-free-code-online.jpg" height="80px" width="100%" alt="kungfuphp free code school" class="img-rounded"></a>
    </div>
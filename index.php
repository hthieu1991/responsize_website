<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lập trình PHP - PHP Programing - PHP Development</title>
    <meta content="Blog chia sẻ kinh nghiệm hướng dẫn lập trình PHP. Framework PHP" name="description">
	<meta content="php, lap trinh php, php tutorials, php programming" name="keywords">
	<link href="http://kungfuphp.com" rel="canonical">
	<meta content="log chia sẻ kinh nghiệm hướng dẫn lập trình PHP. Framework PHP" property="og:description">
	<meta content="http://kungfuphp.com" property="og:url">
	<meta content="https://www.facebook.com/laptrinhkungfu" property="article:publisher">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	
  	<!-- Nav Bar -->
  <div class="container">	
  	<div class="header">
        <ul role="tablist" class="nav nav-pills pull-right col-sm-3 h-nav-margin">
          <li class="active" role="presentation"><a href="#">Home</a></li>
          <li role="presentation"><a href="#">Blogs</a></li>
          <li role="presentation"><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted col-sm-3">Trong Hieu's Blog</h3>
        <form role="search" class="navbar-form col-sm-6 h-search-padding">
	            <div class="form-group">
	              <input type="text" placeholder="Search" class="form-control">
	            </div>
	            <button class="btn btn-default" type="submit">Submit</button>
	    </form>
        
      </div>
    <div class="row">
	    
    </div>
	<div class="row">
		<div class="col-sm-9">
			<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
	    	<!-- Carousel indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>   
	       <!-- Carousel items -->
	        <div class="carousel-inner">
	            <div class="active item">
	                <h2>Slide 1</h2>
	                <div class="carousel-caption">
	                  <h3>First slide label</h3>
	                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	                </div>
	            </div>
	            <div class="item">
	                <h2>Slide 2</h2>
	                <div class="carousel-caption">
	                  <h3>Second slide label</h3>
	                  <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
	                </div>
	            </div>
	            <div class="item">
	                <h2>Slide 3</h2>
	                <div class="carousel-caption">
	                  <h3>Third slide label</h3>
	                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
	                </div>
	            </div>
	        </div>
	        <!-- Carousel nav -->
	        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	    </div>	
	  </div>
	  <div class="col-sm-3">
	  	<img src="bootstrap/img/HIEU1.png" alt="tronghieu" class="img-rounded">
	  </div>

    </div>
    <div class="row">

        <div class="col-sm-9">

          <div class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <h2>Heading</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <pre><code>Example code block</code></pre>
            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <ol>
              <li>Vestibulum id ligula porta felis euismod semper.</li>
              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
            </ol>
            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
          </div><!-- /.blog-post -->

<!--          <div class="blog-post">-->
<!--            <h2 class="blog-post-title">Another blog post</h2>-->
<!--            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>-->
<!---->
<!--            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>-->
<!--            <blockquote>-->
<!--              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
<!--            </blockquote>-->
<!--            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>-->
<!--          </div>-->

<!--          <div class="blog-post">-->
<!--            <h2 class="blog-post-title">New feature</h2>-->
<!--            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>-->
<!---->
<!--            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>-->
<!--            <ul>-->
<!--              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>-->
<!--              <li>Donec id elit non mi porta gravida at eget metus.</li>-->
<!--              <li>Nulla vitae elit libero, a pharetra augue.</li>-->
<!--            </ul>-->
<!--            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>-->
<!--          </div>-->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div>

        <div class="col-sm-3 h-margin-top">
          <div class="jumbotron h-about">
            <h4>About</h4>
            <p style="font-size:14px;">Tên mình là <em>Hiếu</em> . Mình hiện đang là một <em>PHP Developer</em>. 
            Sở thích của mình là <em>phiêu lưu</em>, khám phá <em>những điều mới</em>...
            </p>
          </div>
          <div class="sidebar-module">
          	<ul class="nav nav-pills nav-stacked" role="tablist">
			  <li role="presentation" class="active"><a href="#">PHP cơ bản</a></li>
			  <li role="presentation"><a href="#">PHP nâng cao</a></li>
			  <li role="presentation"><a href="#">Laravel Framework</a></li>
			  <li role="presentation"><a href="#">AJAX</a></li>
			  <li role="presentation"><a href="#">Plugin js</a></li>
			</ul>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div>
   </div>
   <div class="jumbotron h-about">
   			<p style="padding-left:50px;font-size:13px;">Copyright 2014-2015 © kungfuphp.com | Powered By KungfuPhp Version 1.0</p>
   			<div align="center">
		    	<a title="Hoc PHP Mysql Jquery" href="http://www.kungfuphp.com"> PHP MYSQL Online</a> - 
				<a title="Hoc PHP" href="http://www.qhonline.info"> Hoc PHP</a> - 
				<a title="PHP Co ban" href="http://www.kungfuphp.com"> PHP co ban</a> - 
				<a title="PHP Nang Cao" href="http://www.kungfuphp.com"> Lap Trinh PHP Nang Cao</a> - 
				<a title="Laravel Framework" href="http://www.kungfuphp.com"> PHP Framework</a> - 
				<a target="_blank" title="Fabook kungfuphp" href="http://facebook.com/laptrinhkungfu">Facebook KungfuPhp</a>
			</div>
   </div>  
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  <style>
//  	.h-nav{
//  		height:80px;
//  	}
	.navbar-inverse {
	    background-color: #F8F8F8;
	    border-color: #E7E7E7;
	    
	}
	.navbar-brand {
    	color: green !important;
    	font-weight: bold;
	}
	h2{
	    margin: 0;     
	    color: #666;
	    padding-top: 90px;
	    font-size: 52px;
	    font-family: "trebuchet ms", sans-serif;    
	}
	.item{
  		background: #333;    
	    text-align: center;
	    height: 300px !important;
	}
	.carousel{
	    margin-top: 20px;
	    height: 300px;
	}
	.h-about{
		padding-left: 10px !important;
		padding-right: 10px !important;
		padding-top: 10px !important;
		padding-bottom: 10px !important;
	}
	.h-margin-top{
		margin-top :20px;
	}
	.has-border{
		border : solid 3px;
	}
	.h-nav-margin{
		margin-top:10px !important;
	}
	.h-search-padding{
		padding-top:7px;
	}

  </style>
  <script type="text/javascript">
	  $(document).ready(function(){
	
	       $("#myCarousel").carousel();
	
	  });

  </script>
</html>
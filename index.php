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
		<!-- Sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- End sidebar -->

      </div>
   </div>
   <?php include 'inc/footer.php';?>
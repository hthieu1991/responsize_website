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
        <h3 class="text-muted col-sm-3">Kungfu PHP</h3>
        <form role="search" class="navbar-form col-sm-6 h-search-padding">
	            <div class="form-group">
	              <input type="text" placeholder="Search" class="form-control">
	            </div>
	            <button class="btn btn-default" type="submit">Submit</button>
	    </form>
        
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
	                <h2>PHP thuần</h2>
	                <div class="carousel-caption">
	                  <h3>Lập trình PHP cơ bản, nâng cao</h3>
	                  <p>Các bài viết được viết từ cơ bản đến nâng cao một cách rõ ràng, chi tiết, giúp cho bạn có thể học nhanh nhất</p>
	                </div>
	            </div>
	            <div class="item">
	                <h2>Php Frameworks</h2>
	                <div class="carousel-caption">
	                  <h3>CI, Zend, Laravel Frameworks</h3>
	                  <p>Các bài viết sưu tầm,các bài phân tích, so sánh ưu nhược điểm của các framework PHP</p>
	                </div>
	            </div>
	            <div class="item">
	                <h2>Javascript</h2>
	                <div class="carousel-caption">
	                  <h3>jQuery, Ajax, AngularJs , NodeJs</h3>
	                  <p>Những ghi chú, bài viết ngắn về những gì mình tự tìm hiểu được</p>
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
        	<h3 align="center" class="jumbotron h-about">Hướng dẫn lập trình PHP cơ bản</h3>
			<div class="bs-example">
			    <table class="table">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Tiêu đề</th>
			          <th>Tóm tắt nội dung</th>
			          <th>Tác giả/ Ngày</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr class="active">
			          <td>1</td>
			          <td><b><a href="chi-tiet-bai-viet.php" title="chi tiet bai viet php">Bài 1 : Cái đặt môi trường lập trình PHP</a></b></td>
			          <td><i>Việc đầu tiên để có thể chạy được web php là chúng ta cần cài môi trường apache</i><span style="font-size:11px;">  <a href="chitietbaiviet">Xem chi tiết</a></span></td>
			          <td>Administrator <br/>(09/11/2014)</td>
			        </tr>
			        <tr>
			          <td>2</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			        <tr class="success">
			          <td>3</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			        <tr>
			          <td>4</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			        <tr class="info">
			          <td>5</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			        <tr>
			          <td>6</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			        <tr class="warning">
			          <td>7</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			        <tr>
			          <td>8</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			        <tr class="danger">
			          <td>9</td>
			          <td>Column content</td>
			          <td>Column content</td>
			          <td>Column content</td>
			        </tr>
			      </tbody>
			    </table>
			  </div>
	          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div>
		<!-- sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- end sidebar -->

      </div>
   </div>
  <?php include 'inc/footer.php';?>
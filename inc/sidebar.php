<div class="col-sm-3 h-margin-top">
<div class="jumbotron h-about">
<h4>About</h4>
<p style="font-size: 14px;">Tên mình là <em>Hiếu</em> . Mình hiện đang
là một <em>PHP Developer</em>. Sở thích của mình là <em>phiêu lưu</em>,
khám phá <em>những điều mới</em>...</p>
<p style="font-size: 14px;"><i><b>Chia sẽ nhiều hơn - Phát triển nhiều hơn</b></i> - <em>http://kungfuphp.com</em></p>
</div>

<div class="sidebar-module">
<ul id="category" class="nav nav-pills nav-stacked" role="tablist">
	<?php
          include("lib/connection.php");
          $sql = "SELECT * FROM category  WHERE cat_public=1";
          $query = mysqli_query($conn,$sql);
          while ($data = mysqli_fetch_array($query)) {
          	$cat_link = $data['cat_link'];
          	$cat_name = $data['cat_name'];
          	echo "<li role='presentation' class='h-item'><a href='$cat_link'><b>$cat_name</b></a></li>";
          }
    ?>
</ul>
</div>
<div class="sidebar-module" style="margin-bottom:10px; margin-top:10px;">
	<div class="fb-like-box" data-href="https://www.facebook.com/laptrinhkungfu" data-height="225" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
</div>

<!-- <div class="sidebar-module">
<h4>Archives</h4>
<ol class="list-unstyled">
	<li><a href="#">March 2014</a></li>
	<li><a href="#">February 2014</a></li>
</ol>
</div> -->
<!-- <div class-"sidebar-module" style="margin-bottom:10px; margin-top:10px;">
	<a href="http://like.xln.vn/?ref=3403" target="_blank"><img class="img-rounded" src="http://kungfuphp.com/kungfuphp/kungfuphp-like-share.jpg" alt="kungfuphp-banner-like-share" border="0" /></a>
</div> -->
<div class="sidebar-module">
<h4>Liên kết</h4>
<ol class="list-unstyled">
	<li><a href="https://www.facebook.com/DeMen.SieuQuay">Dế mèn siêu quậy</a></li>
	<li><a href="https://www.facebook.com/laptrinhkungfu">Kungfu PHP group</a></li>
	<li><a href="http://ask.fm/programmingiter">Bạn hỏi tôi trả lời</a></li>
</ol>
</div>
<div class="sidebar-module">
	<iframe src="http://ask.fm/widget/f009d035a4e3f29cc57c277422ad5522c3f0d02a?stylesheet=small&fgcolor=%23000000&bgcolor=%23EFEFEF&lang=46" frameborder="0" scrolling="no" width="200" height="170" style="border:none;"></iframe>
</div>

<br>

<!-- <div class="sidebar-module">
	<a href="http://service.doublelink.net/d/258/programmingiter" onclick="window.open(this.href);return false;" style="display:block; float:left;"><img alt="" style="width:300px; height:250px;" src="http://www.doublelink.net/Images/Banner/2014/11/17/300x250_727698.jpg" /></a><div style="clear:both; width:0; height:0;"></div>
</div> -->
<!-- <div class="sidebar-module">	<a href="http://adf.ly/?id=8346573"><img border="0" src="https://cdn.adf.ly/images/banners/adfly.300x250.1.gif" width="300" height="250" title="AdF.ly - shorten links and earn money!" /></a></div>
</div> -->

<?php $title = 'Có nên tập trung quá nhiều vào framework ? - PHP Programing - PHP Development'; ?>
<?php include 'inc/top.php';?>
    <div class="row">
		    <?php
          include("lib/connection.php");
          $id = $_GET["id_blog"];
          $sql = "SELECT * FROM thread  WHERE thread_id=$id";
          $query = mysqli_query($conn,$sql);
          $data = mysqli_fetch_array($query);

        ?>
        <div class="col-sm-9">
        <!-- 	<h3 align="center" class="jumbotron h-about">Có nên tập trung quá nhiều vào framework ?</h3> -->
  			<div class="bs-example">
  				<div class="blog-post">
            <h3 class="blog-post-title" style="padding-top:10px;"><?php echo $data["title"]; ?></h3>
            <p class="blog-post-meta"> <?php echo $data["upd_date"];?> by <a href="#"><?php echo $data["upd_user"] ?></a></p>

            <p><?php echo $data["short_content"]; ?></p>
            <?php
              echo $data["content"];
            ?>
            <br />
            <em>Bài viết liên quan</em>
            <ul>
              <li><a href="http://kungfuphp.com/index.php">Lập trình web là gì.</a></li>
            </ul>
           
          </div>
  				<div align="center" class="row">   
  					<div class="fb-comments" data-href="http://kungfuphp.com/chi-tiet-blog.php?id_blog=1" data-numposts="10" data-colorscheme="light" width="100%"></div>
  				</div>
  			</div>
        </div>

        <!-- sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- end sidebar -->

      </div>
   </div>
  <?php include 'inc/footer.php';?>
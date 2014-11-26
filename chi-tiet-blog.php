<?php
include("lib/connection.php");
require_once 'class/class_rewrite_link.php';
$id = 1;
if (isset($_GET['id_blog'])) {
  $id = $_GET["id_blog"];
}

$sql = "SELECT * FROM thread  WHERE thread_id=$id";
$query = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($query);
$title = $data['title'].' - PHP Programing - PHP Development';

?>
<?php include 'inc/top.php';?>
    <div class="row">
        <div class="col-sm-9">
        <!-- 	<h3 align="center" class="jumbotron h-about">Có nên tập trung quá nhiều vào framework ?</h3> -->
  			<div class="bs-example">
  				<div class="blog-post">
            <h2 class="blog-post-title" style="padding-top:10px;"><?php echo $data["title"]; ?></h2>
            <p class="blog-post-meta"> <?php echo $data["inp_date"];?> by <a href="#"><?php echo $data["upd_user"] ?></a></p>

            <p><?php echo $data["short_content"]; ?></p>
            <?php
              echo $data["content"];
            ?>
            <br />
            <em>Bài viết liên quan</em>
            <?php
              $sql = "SELECT * FROM thread  WHERE cat_id=3";
              $query = mysqli_query($conn,$sql);
              
            ?>
            <ul>
              <?php
              $rewrite_link = new rewrite_link();

              while ($data = mysqli_fetch_array($query)) {
                $id_blog = $data['thread_id'];
                $title = $data['title'];
                $title_op =  $rewrite_link->slug($data['title-op']);
                $domain = $_SERVER['SERVER_NAME'];
                echo "<li><a href='http://$domain/$title_op-$id_blog.html'>$title</a></li>";
              }
              ?>
              <!-- <li><a href="http://kungfuphp.com/index.php">Lập trình web là gì.</a></li> -->
            </ul>
           
          </div>
  				<div align="center" class="row">   
  					<div class="fb-comments" data-href="http://kungfuphp.com/chi-tiet-blog.php?id_blog=<?php echo $id ?>" data-numposts="10" data-colorscheme="light" width="100%"></div>
  				</div>
  			</div>
        </div>

        <!-- sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- end sidebar -->

      </div>
   </div>
  <?php include 'inc/footer.php';?>
<?php $title = 'Lập trình PHP - PHP Programing - PHP Development'; ?>
<?php include 'inc/top.php';?>
    <div class="row">
        <?php
          include("lib/connection.php");
          $sql = "SELECT * FROM thread  WHERE thread_id=2";
          $query = mysqli_query($conn,$sql);
          $data = mysqli_fetch_array($query);

        ?>
        <div class="col-sm-9">

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $data["title"];?></h2>
            <p class="blog-post-meta"><?php echo $data["upd_date"];?> by <a href="#"><?php echo $data["upd_user"];?></a></p>

            <p><?php echo $data["short_content"];?></p>
            <?php echo $data["content"];?>
            <em>Bài viết liên quan</em>
            <?php
              $sql = "SELECT * FROM thread  WHERE cat_id=3";
              $query = mysqli_query($conn,$sql);
              
            ?>
            <ul>
              <?php
              while ($data = mysqli_fetch_array($query)) {
                $id = $data['thread_id'];
                $title = $data['title'];
                echo "<li><a href='chi-tiet-blog.php?id_blog=$id'>$title</a></li>";
              }
              ?>
              
            </ul>
           
          </div>

          <!-- <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav> -->

        </div>
		<!-- Sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- End sidebar -->

      </div>
   </div>
   <?php include 'inc/footer.php';?>
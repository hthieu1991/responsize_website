<?php $title = 'Danh sách các bài blog chia sẽ kinh nghiệm về lập trình PHP, PHP programming, js, plugin'; 
	  $short_content = 'Tổng hợp các bài viết, chia sẽ kinh nghiệm, cũng như các bài học quý giá về các kiến thức lập trình PHP cơ bản, nâng cao, javascript, thuật toán, tối ưu SEO,js plugin';
?>
<?php include 'inc/top.php';?>
    <div class="row">
		
        <div class="col-sm-9">
        	<h3 align="center" class="jumbotron h-about">Tản mạn lập trình</h3>
			<div class="bs-example">
			    <table class="table">
			      <thead>
			        <tr>
			          <th>STT</th>
			          <th>Tiêu đề</th>
			          <th>Tóm tắt nội dung</th>
			          <th>Tác giả/ Ngày</th>
			        </tr>
			      </thead>
			      <tbody>
			      	<?php
				          include("lib/connection.php");
				          require_once 'class/class_rewrite_link.php';
				          $rewrite_link = new rewrite_link();
				          $sql = "SELECT * FROM thread WHERE cat_id=3  ORDER BY upd_date DESC";
				          $query = mysqli_query($conn,$sql);
				          $row_count = 0;
				          while ($data = mysqli_fetch_array($query)):
				          	$title_to_go = $rewrite_link->slug($data['title_op']);
				          	if ($row_count%2==0):
				          		
				    ?>
			        <tr class="active">
			          <td><?php echo $row_count+1 ?></td>
			          <td><b><a href="http://<?php echo ROOT; ?>/<?php echo $title_to_go?>-<?php echo $data['thread_id']; ?>.html" title="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></a></b></td>
			          <td><i><?php echo $data['short_content']; ?>...</i><span style="font-size:11px;">  <a href="http://<?php echo ROOT; ?>/<?php echo $title_to_go?>-<?php echo $data['thread_id']; ?>.html">Xem chi tiết</a></span></td>
			          <td><?php echo $data['inp_user']; ?> <br/>(<?php echo $data['upd_date']; ?>)</td>
			        </tr>
			        <?php
			        	   else:
			        ?>
			        <tr class="info">
			          <td><?php echo $row_count+1; ?></td>
			          <td><b><a href="http://<?php echo ROOT; ?>/<?php echo $title_to_go?>-<?php echo $data['thread_id']; ?>.html" title="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></a></b></td>
			          <td><i><?php echo $data['short_content']; ?>...</i><span style="font-size:11px;">  <a href="http://<?php echo ROOT; ?>/<?php echo $title_to_go?>-<?php echo $data['thread_id']; ?>.html">Xem chi tiết</a></span></td>
			          <td><?php echo $data['inp_user']; ?> <br/>(<?php echo $data['upd_date']; ?>)</td>
			        </tr>
			        <?php
			        		endif;
			        		$row_count++;
			        	endwhile;
			        ?>
			       
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
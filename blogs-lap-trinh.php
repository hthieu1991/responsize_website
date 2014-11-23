<?php $title = 'Các bài blog lập trình PHP - PHP Programing - PHP Development'; ?>
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
				          $sql = "SELECT * FROM thread  ORDER BY upd_date DESC";
				          $query = mysqli_query($conn,$sql);
				          $row_count = 0;
				          while ($data = mysqli_fetch_array($query)):
				          	if ($row_count%2==0):
				          		
				    ?>
			        <tr class="active">
			          <td><?php echo $row_count+1 ?></td>
			          <td><b><a href="chi-tiet-blog.php?id_blog=<?php echo $data['thread_id'] ?>" title="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></a></b></td>
			          <td><i><?php echo $data['short_content']; ?>...</i><span style="font-size:11px;">  <a href="chi-tiet-blog.php?id_blog=<?php echo $data['thread_id']; ?>">Xem chi tiết</a></span></td>
			          <td><?php echo $data['inp_user']; ?> <br/>(<?php echo $data['upd_date']; ?>)</td>
			        </tr>
			        <?php
			        	   else:
			        ?>
			        <tr class="info">
			          <td><?php echo $row_count+1; ?></td>
			          <td><b><a href="chi-tiet-blog.php?id_blog=<?php echo $data['thread_id'] ?>" title="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></a></b></td>
			          <td><i><?php echo $data['short_content']; ?>...</i><span style="font-size:11px;">  <a href="chi-tiet-blog.php?id_blog=<?php echo $data['thread_id']; ?>">Xem chi tiết</a></span></td>
			          <td><?php echo $data['inp_user']; ?> <br/>(<?php echo $data['upd_date']; ?>)</td>
			        </tr>
			        <?php
			        		endif;
			        		$row_count++;
			        	endwhile;
			        ?>
			        <!-- <tr class="success">
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
			        </tr> -->
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
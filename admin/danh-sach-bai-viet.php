<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../../favicon.ico" rel="icon">

    <title>Administrator</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../bootstrap/css/dashboard.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Admistrator Management</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" placeholder="Search..." class="form-control">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include("incs/sidebar.php"); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Quản lý bài viết</h1>
          <div class="row placeholders">
              
              <button style="display:none" type="button" id="btn_back" class="btn btn-warning">&nbsp;&nbsp;&nbsp;Quay lại&nbsp;&nbsp;&nbsp;</button>
          
          </div>
          <?php if (!isset($_GET["thread_id"])):
            
          ?>
          <h3 class="sub-header">Danh sách bài viết</h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Ngày tạo</th>
                  <th>Người tạo</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include("../lib/connection.php");
                  $sql = "SELECT * FROM thread ORDER BY upd_date desc";
                  $query = mysqli_query($conn,$sql);
                  $TRs = "";
                  while ($row = mysqli_fetch_array($query)) {
                    $id = $row["thread_id"];
                    $title = $row['title'];
                    $inp_date = $row['inp_date'];
                    $upd_user = $row['upd_user'];
                    $TRs .= "<tr><td>$id</td><td><a name='thread_$id' href='#'>$title</a> </td><td>$inp_date</td><td>$upd_user</td></tr>";
                  }
                  echo $TRs;
                ?>
             
              </tbody>
            </table>
          </div>
          <?php endif;?>
          <?php if (isset($_GET["thread_id"])): ?>
          
          <div class="table-responsive">
             <form id="fr_thread" name="fr_thread" action="act/process_save_thread.php" method="POST">
            <h3 class="page-header">Chi tiết bài viết</h3>
            <?php 
              include("../lib/connection.php");
              $id = $_GET["thread_id"];
              $sql = "SELECT t.*
                            ,c.cat_name
                      FROM thread t
                      LEFT JOIN category c
                      ON t.cat_id = c.cat_id
                      WHERE thread_id=$id";
              $query = mysqli_query($conn,$sql);
              $row = mysqli_fetch_array($query);

            ?>
            <input type="hidden" value="<?php echo $row['thread_id'];?>" name="thread_id" >
            <div class="alert alert-danger" id="error" role="alert" style="display:none"></div>
            <div class="row placeholders">
              <div class="col-sm-2" align="left"><label class="label label-info">Danh mục :</label></div>
              <div class="col-sm-2">
                  <!-- <input type="text" value="<?php echo $row["cat_name"] ?>"> -->
                  <select id="category"name="category">
                  <?php 
                    include("../lib/connection.php");
                    $sql = "SELECT * FROM category";
                    $query = mysqli_query($conn,$sql);
                    $option = "";
                    while ($row_op = mysqli_fetch_array($query)) {
                      $check = "";                      
                      $cat_id = $row_op["cat_id"];
                      $cat_name = $row_op["cat_name"];
                      if ($cat_id==$row["cat_id"]) {
                        $check = "selected='selected'";
                      }
                      $option .= "<option value='$cat_id' $check >$cat_name</option>";
                    }
                    echo $option;
                  ?>
                </select>
              </div>
              <div class="col-sm-8"></div>
            </div>
            <div class="row placeholders">
              <div class="col-sm-2" align="left"><label class="label label-info">Tiêu đề :</label></div>
              <div class="col-sm-2">
                <input type="text" size="60" id="title" name="title" value="<?php echo $row["title"] ?>"> 
              </div>
              <div class="col-sm-8"></div>
            </div>
            <div class="row placeholders">
              <div class="col-sm-2" align="left"><label class="label label-info">Tiêu đề không dấu:</label></div>
              <div class="col-sm-2">
                <input type="text" size="60" id="title_op" name="title_op" value="<?php echo $row["title_op"] ?>"> 
              </div>
              <div class="col-sm-8"></div>
            </div>
            <div class="row placeholders">
              <div class="col-sm-2" align="left"><label for="short_content" class="label label-info">Nội dung ngắn :</label></div>
              <div class="col-sm-2">
                <textarea id="short_content" name="short_content" cols="60" rows="4" ><?php echo $row["short_content"] ?></textarea>
              </div>
              <div class="col-sm-8"></div>
            </div>
            <h2 class="sub-header">Nội dung bài viết</h2>
            <div class="table-responsive">
              <textarea name="content" id="content" rows="10" cols="80">
                  <?php echo $row["content"];?>
              </textarea>
            </div>
            <div class="table-responsive">
              <br />
              <button id="btn_update" name="btn_update" class="btn btn-primary btn-lg">Cập nhật bài viết</button>
            </div>
          </form>
          </div>
        <?php endif;?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/docs.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/common.js"></script>
    <script type="text/javascript">
      var check = <?php echo isset($_GET['thread_id'])?0:1 ?>;
      console.log(check);
      if (check==0) {
        CKEDITOR.replace( 'content' );
        $("#btn_back").show();
      }
      $("#btn_new_cat").on("click",function(){
        window.location.assign("bai-viet-moi.php");
      });
      $("a[name^='thread_']").on("click",function(){
        var name = $(this).attr("name");
        var array = name.split("_");
        var id = array[1];
        window.location.assign("danh-sach-bai-viet.php?thread_id="+id);
      });
      $("#btn_back").on("click",function(){
        window.location.assign("danh-sach-bai-viet.php");
      })
    </script>
   
  </body>
</html>
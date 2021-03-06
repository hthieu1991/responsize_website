<?php
  session_start();
  if (!isset($_SESSION["email"])) {
      header('Location: login.php');
  }else{
    if ($_SESSION["email"]!="programming.iter@gmail.com") {
       header('Location: login.php');
    }
  }
?>
<?php include("incs/top.php"); ?>

    <div class="container-fluid">
      <div class="row">
        <?php include("incs/sidebar.php"); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <form id="fr_thread" name="fr_thread" action="act/process_save_thread.php" method="POST">
          <h1 class="page-header">Quản lý bài viết</h1>
          <div class="alert alert-danger" id="error" role="alert" style="display:none"></div>
          <div class="row placeholders">
            <div class="col-sm-2" align="left"><label class="label label-info">Chọn danh mục :</label></div>
            <div class="col-sm-2">
              <select id="category"name="category">
                <?php 
                  include("../lib/connection.php");
                  $sql = "SELECT * FROM category";
                  $query = mysqli_query($conn,$sql);
                  while ($row = mysqli_fetch_array($query)) {
                    $cat_id = $row["cat_id"];
                    $cat_name = $row["cat_name"];
                    echo "<option value='$cat_id'>$cat_name</option>";
                  }
                ?>
              </select>
            </div>
            <div class="col-sm-8"></div>
          </div>
          <div class="row placeholders">
            <div class="col-sm-2" align="left"><label class="label label-info">Tiêu đề :</label></div>
            <div class="col-sm-2">
              <input type="text" size="60" id="title" name="title"> 
            </div>
            <div class="col-sm-8"></div>
          </div>
          <div class="row placeholders">
            <div class="col-sm-2" align="left"><label class="label label-info">Tiêu đề không dấu :</label></div>
            <div class="col-sm-2">
              <input type="text" size="60" id="title_op" name="title_op"> 
            </div>
            <div class="col-sm-8"></div>
          </div>
          <div class="row placeholders">
            <div class="col-sm-2" align="left"><label for="short_content" class="label label-info">Nội dung ngắn :</label></div>
            <div class="col-sm-2">
              <textarea id="short_content" name="short_content" cols="60" rows="4" ></textarea>
            </div>
            <div class="col-sm-8"></div>
          </div>
          <h2 class="sub-header">Nội dung bài viết</h2>
          <div class="table-responsive">
            <textarea name="content" id="content" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
          </div>
          <div class="table-responsive">
            <br />
            <button id="btn_save" name="btn_save" class="btn btn-primary btn-lg">Lưu bài viết</button>
          </div>
        </form>
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
      CKEDITOR.replace( 'content' );
    </script>
    <script type="text/javascript">
      $("#btn_save").on("click",function(){
        var title = $("#title").val();
        var short_content = $("#short_content").val();
        var content = $("#content").val();
        if (title=="" || short_content=="" || content=="") {
          var error = $("#error");
          error.html("Vui lòng nhập đầy đủ thông tin");
          error.show();
        }else{
          $("#fr_thread").submit();
        }
      });
    </script>
  </body>
</html>
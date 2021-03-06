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
          <h1 class="page-header">Danh Mục Bài Viết</h1>
          <div class="row placeholders">
            <div class="form-group">
              <button type="button" id="btn_new_cat" class="btn btn-warning">Thêm danh mục</button>
              <input type="text" style="height:35px;display:none" id="edit_new_cat" name="new_cat" placeholder="Tên danh mục..." >
              <button type="button" id="btn_save_new_cat" style="display:none" class="btn btn-primary">Save</button>
          </div>
          </div>
          
          <h2 class="sub-header">Danh sách danh mục</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên danh mục</th>
                  <th>Ngày tạo</th>
                  <th>Người tạo</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include("../lib/connection.php");
                  $sql = "SELECT * FROM category";
                  $query = mysqli_query($conn,$sql);
                  $TRs = "";
                  while ($row = mysqli_fetch_array($query)) {
                    $cat_id = $row['cat_id'];
                    $cat_name = $row['cat_name'];
                    $inp_date = $row['inp_date'];
                    $upd_user = $row['upd_user'];
                    $TRs .= "<tr><td>$cat_id</td><td>$cat_name</td><td>$inp_date</td><td>$upd_user</td></tr>";
                  }
                  echo $TRs;
                ?>
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/docs.min.js"></script>
    <script src="js/common.js"></script>
    <script type="text/javascript">
      $("#btn_new_cat").on("click",function(){
        $(this).hide();
        $("#edit_new_cat").show();
        $("#btn_save_new_cat").show();
      });
      $("#btn_save_new_cat").on("click",function(){
        $.ajax({
          url : "act/processs_save_cat.php?flg_add_cat",
          type : "POST",
          dataType : "json",
          data : {cat_name:$("#edit_new_cat").val()},
          success : function(response){
            if (response.status=="200") {
              location.reload();
            };
            
          }
        });
      })
    </script>
   
  </body>
</html>
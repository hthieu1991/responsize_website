<?php $title = 'Liên hệ lập trình PHP - PHP Programing - PHP Development';
      $short_content = 'Liên hệ với kungfuphp nếu bạn có bất kì thắc mắc';
 ?>
<?php include 'inc/top.php';?>
<?php include("lib/connection.php");
    $div_success = '';
    if (isset($_POST['mail'])) {
      $email = addslashes($_POST["mail"]);
      $name = addslashes($_POST["name"]);
      $title = addslashes($_POST["title"]);
      $content = addslashes($_POST["content"]);
      $check_file = 0;
      // if (isset($_FILE["fileupload"])) {
      //   $check_file = 1;
      //   //do upload file
      //   $name = basename($_FILE['myfile']['name']);
      //   echo $name;exit();
      //   move_uploaded_file($_FILE['myfile']['tmp_name'], 'docs/'.$name);
      //   // set proper permissions on the new file
      //   chmod('docs/'.$_FILE['myfile']['name'], 0644);
      // }
      $sql = "SELECT * FROM member WHERE email='$email'";
      $query = mysqli_query($conn,$sql);
      $num_row = mysqli_num_rows($query);
      if ($num_row==0) {
        $sql = "INSERT INTO member(email,name,level,inp_date,upd_date,status)
                  VALUES ('$email','$name',0,NOW(),NOW(),0)";
        mysqli_query($conn,$sql);
        if ($check_file==0) {
          $sql = "INSERT INTO contact(email,title,content)
                  VALUES ('$email','$title','$content')";
        }else{
          $sql = "INSERT INTO contact(email,title,content,file_attach)
                  VALUES ('$email','$title','$content','$name')";
        }
        
        mysqli_query($conn,$sql);
        $message = 'Gửi thành công! Cám ơn bạn, mình sẽ phản hồi trong thời gian sớm nhất';
        $div_success = '<div class="alert alert-success" id="contact_sucess" role="alert">'.$message.'</div>';
     
      }
    }
      
?>
    <div class="row">

        <div class="col-sm-9">
          <div class="jumbotron" style="margin-top:10px;">
            <h3>Liên hệ với mình</h2>
            <kbd>Email : programming.iter@gmail.com</kbd><br/></br>
            <kbd>Facebook : https://www.facebook.com/laptrinhkungfu</kbd><br/><br/>
            <p class="bg-primary" style="font-size:14px;">Hoặc điền vào mẫu form dưới đây, mình sẽ phản hồi tin nhắn của bạn trong thời gian sớm nhất</p>
            <form role="form" name="fr_contact" id="fr_contact" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                
                <?php
                    echo $div_success;
                ?>
                <div class="alert alert-danger" id="contact_error" role="alert" style="display:none"></div>
                <label class="label label-info" for="email">Địa chỉ Email</label>
                <input type="text" class="form-control" id="mail" name="mail" placeholder="Mail">
              </div>
              <div class="form-group">
                <label class="label label-info" for="name">Họ tên</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Tên">
              </div>
              <div class="form-group">
                <label class="label label-info" for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề">
              </div>
              <div class="form-group">
                <label  class="label label-info" for="content">Nội dung</label>
                <textarea id="content" name="content" rows="4" cols="70"></textarea>
              </div>
             <!--  <div class="form-group">
                <label for="fileupload">Tập tin đính kèm</label>
                <input type="file" id="fileupload" name="fileupload" />
              </div> -->

              <button id="btn_contact" name="btn_contact" class="btn btn-primary">Gửi thông tin</button>
            </form>
          </div>
        </div>
		<!-- Sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- End sidebar -->

      </div>
   </div>

   <?php include 'inc/footer.php';?>
<script type="text/javascript">
$("#btn_contact").on("click",function(){
  var contact_error = $("#contact_error");
  var email = $("#email").val();
  var name = $("#name").val();
  var title = $("#title").val();
  var content = $("#content").val();
  var file = $("#myfile").val();
  if (email=="" || name=="" || title=="" || content=="") {
    contact_error.show();
    contact_error.html("Vui lòng điền đầy đủ thông tin nhé bạn !");
  }else{
    contact_error.hide();
    contact_error.html("");
    $("#fr_contact").submit();
  }
  return false;
});
</script>
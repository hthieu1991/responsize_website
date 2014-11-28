<?php $title = 'Liên hệ lập trình PHP - PHP Programing - PHP Development';
      $short_content = 'Liên hệ với kungfuphp nếu bạn có bất kì thắc mắc';
 ?>
<?php include 'inc/top.php';?>
    <div class="row">

        <div class="col-sm-9">
          <div class="jumbotron" style="margin-top:10px;">
            <h3>Liên hệ với mình</h2>
            <p class="bg-primary" style="font-size:14px;">Liên lạc với mình thông qua</p>
            <kbd>Email : programming.iter@gmail.com</kbd><br/></br>
            <kbd>Skype : hoang.hieu91</kbd><br/></br>
            <kbd>Facebook : https://www.facebook.com/DeMen.SieuQuay</kbd><br/><br/>
            <p class="bg-primary" style="font-size:14px;">Hoặc điền vào mẫu form dưới đây, mình sẽ phản hồi tin nhắn của bạn trong thời gian sớm nhất</p>
            <form role="form">
              <div class="form-group">
                <label class="label label-info" for="exampleInputEmail1">Địa chỉ Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Mail">
              </div>
              <div class="form-group">
                <label class="label label-info" for="exampleInputEmail1">Họ tên</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên">
              </div>
              <div class="form-group">
                <label class="label label-info" for="exampleInputEmail1">Tiêu đề</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề">
              </div>
              <div class="form-group">
                <label  class="label label-info" for="exampleInputPassword1">Nội dung</label>
                <textarea rows="4" cols="70"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Tập tin đính kèm</label>
                <input type="file" id="exampleInputFile">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>
              <!-- <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div> -->
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
		<!-- Sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- End sidebar -->

      </div>
   </div>
   <?php include 'inc/footer.php';?>
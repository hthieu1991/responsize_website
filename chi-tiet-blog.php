<?php $title = 'Có nên tập trung quá nhiều vào framework ? - PHP Programing - PHP Development'; ?>
<?php include 'inc/top.php';?>
    <div class="row">
		
        <div class="col-sm-9">
        <!-- 	<h3 align="center" class="jumbotron h-about">Có nên tập trung quá nhiều vào framework ?</h3> -->
  			<div class="bs-example">
  				<div class="blog-post">
            <h2 class="blog-post-title" style="padding-top:10px;">Có nên tập trung quá nhiều vào framework ?</h2>
            <p class="blog-post-meta">18/11/2012 by <a href="#">Administrator</a></p>

            <p>Cũng tích cóp, lượm lặt được kha khá kinh nghiệm trong quá trình làm và phát triển web vơi PHP, nay minh muốn chia sẽ với các bạn chủ đề "Có nên tập trung quá nhiều vào framework ?"</p>
            <hr>
            <p>Mình sẽ đưa ra những quan điểm cá nhân về mặt tốt và mặt xấu của <a href="#" title="PHP Framework">Framework </a>
              để các bạn có cái nhìn rõ hơn
            </p>
            <h4>A) Tại sao nên ?</h4>
            <h5 style="font-weight:bold">1) Cách tổ chức code và danh sách files</h5>
            <p>Khi bạn tổ cài đặt một PHP Framework, nó đã có sẵn một cấu trúc bao gồm các folder và tập tin nhất định
              Và từ đó bạn có thể follow theo cái cấu trúc đó như một tiêu chuẩn để tạp ra các ứng dụng website thích hợp
            </p>
            <h5 style="font-weight:bold">2) Các tiện ích và thư viện hỗ trợ</h5>
            <p> Các PHP Framework thông thường được một đội ngũ kĩ sư lập trình dày dạn kinh nghiệm phát triển, và họ đã xây dựng sẵn
              cho chúng ta các thư viên hỗ trợ phong phú, điều này là một lợi điểm rất lớn khi mà chúng ta không muốn phải bắt đầu xây dựng
              toàn bộ hệ thống website.<br />
              Thông thường những thư viện bao gồm :<br />
              -Form Validation <br />
              -Input/Output filtering <br />
              -Database Abstraction <br />
              -Session and Cookie Handling <br />
              -Email, Calendar, Pagination etc… <br /></p>
              <img width="697" height="205" title="flowchart php" alt="flowchart php" src="bootstrap/img/appflowchart.gif">
            <h5 style="font-weight:bold">3) Mô hình MVC</h5>
            <p>Cấu trúc mô hình MVC bao gồm:<br />
              - Model : Bao gồm các xử lý, truy vấn data, bộ mặt đại diện cho cấu trúc của dữ liệu <br />
              - Controller : Điều hướng các yêu cầu, và xử lý các yêu cầu đó <br />
              - View : Hiển thị các output ra phía người dùng có thể thấy được
            </p> 
            <p>Cấu trúc này rất rõ ràng và dễ cho việc bảo trì đối với các hệ thống lớn và phức tạp</p>
            <h5 style="font-weight:bold">4) Bảo mật</h5>
            <p>Các PHP Framework thông thường hỗ trợ khá nhiều biện pháp chống những cuộc tấn công nhất định
            <br />Chẳng hạn như là
            <br />-SQL Ejection<br />
              -Form Helper , Url Helper<br />
              -XSS Attack</p>
            <h5 style="font-weight:bold">5) Code ít và phát triển nhanh hơn</h5>
            <p>Điều này là tất yếu bởi Framework được xây dựng sẵn các thư viện hỗ trợ, giúp cho code ít hơn nhưng làm được nhiều việc hơn</p>
            <h5 style="font-weight:bold">6) Đội ngũ hộ trợ lớn</h5>
            <p>Hầu hết các Framework lớn hoặc phổ biến thường đứng sau đố là một hệ thống hỗ trợ dày dạn kinh nghiệm, đồng thời thông qua các diễn đàn
              việc giải đáp các thắc mắc sẽ nhanh chóng hơn
            </p>
            <h4>C) Tại sao không nên?
            <h5 style="font-weight:bold">1) Bạn sẽ học được nhiều hơn khi không sử dụng Framework</h5>
            <p>Theo mình điều này là quá rõ ràng, bởi vì khi không dùng Framework, bạn phải tự mày mò, code từ A-Z, và từ đó bạn sẽ
              hiểu sâu hơn về dòng chảy của code, dòng chảy của dữ liệu. Đồng thời khi tự code bạn học được cái nền, cái cơ bản, và từ có thể
              từ đó biết đâu bạn sẽ tự sáng tạo được một framework mới hay hơn so với các framework hiện nay.<br />
              Một bằng chứng đáng nói là khi mình quá phụ thuộc vào framwork, mình sẽ dần quên đi các kiến thức căn bản hay nói nôm na là "lục nghê",
              và điều này mình đã từng trải qua và mình rất thấm thía nó </p>
            <h5 style="font-weight:bold">2) Khả năng bảo mật</h5>
            <p>Điều này có vẻ mâu thuẫn vì ở lợi điểm phía trên mình cũng nói là Framework bảo mật. Điều trên đúng và điều này cũng đúng,
              một hệ thống khi bạn tự phát triển ra, những ý tưởng, những điều ẩn giấu thì chỉ mỗi mình bạn biết, và đem so với một framework đã được nhiều người
              phát triển và biết đến thì vấn đề bảo mật này cũng rất đáng đề cao</p>
            <h5 style="font-weight:bold">3) Mục đích phát triển</h5>
            <p>Một ứng dụng do chính bạn tự thiết kế thì ắt hẳn bạn cũng đã chủ động xây dựng nó phù hợp với mục đích phát triển của ứng dụng,
              loại bỏ đi các thư viện hỗ trợ dư thừa của các framework, đồng thời theo mình nghĩ thì ắt hẳn ứng dụng của bạn cũng sẽ nhanh hơn</p>
            <h5 style="font-weight:bold">4) Các website quy mô vừa và nhỏ</h5>
            <p>Thông thường với các website quy mô vừa và nhỏ, đôi khi tự phát triển lại nhanh hơn và không nhất thiết phải xử dụng một framework cồng kềnh... </p>
            <quote>Trên đây là những suy nghĩ, quan điểm chia sẽ của mình và ưu và nhược điểm của framework, hi vọng các bạn sẽ 
              biết cách khi nào nên và không nên sử dụng framework</quote>
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
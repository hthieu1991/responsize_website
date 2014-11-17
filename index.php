<?php include 'inc/top.php';?>
    <div class="row">

        <div class="col-sm-9">

          <div class="blog-post">
            <h2 class="blog-post-title">Lập trình web là gì ?</h2>
            <p class="blog-post-meta">11/11/2012 by <a href="#">Administrator</a></p>

            <p>Bài viết này tóm tắt ngắn gọn, tổng quan về lập trình web là gì ?</p>
            <hr>
            <p>Để tìm hiểu <a href="#">lập trình web là gì</a>, thì chúng ta nên hiểu rõ khái niệm "lập trình" là gì ?</p>
            <blockquote>
              <p>Lập trình đó là <strong>công đoạn nghệ thuật phức tạp yêu cầu máy tính cần phải làm những gì</strong></p>
            </blockquote>
            <p>Bạn đừng hiểu lầm lập trình theo nghĩa <em>"ê, lấy cho tao ly nước uống coi, cái thằng máy tính ngu ngốc kia"</em>. Nó không phải vậy, mà lập trình được hướng dẫn thực thi bằng một chuỗi các mã lệnh, bố cục hợp lý để máy tính có thể hiểu được
              . Về cơ bản, bạn cung cấp cho máy tính một văn bản bao gồm các bước nhỏ hướng dẫn, máy tính sẽ đi theo từng bước nhỏ đó đến cuối danh sách, lần lượt thực hiện các bước theo thứ tự. Lập trình cho phép chúng ta tạo ra những phần mềm mới. Và lập trình web thì cũng như thế, 
              chỉ có điều là bạn viết các ứng dụng hoặc trang web được sử dụng bởi các trình duyệt web (firefox, chrome, IE, Opera,...)
            </p>
           
            <h3>Vậy thì một trang web làm việc như thế nào ?</h3>
            <p>Cơ bản, nó có cấu trúc như sau.</p>
            <pre>
            	<code>
	            		&lt;html&gt;<br>
					&lt;head&gt;<br>
					&lt;title&gt;My Web Page&lt;/title&gt;<br>
					&lt;/head&gt;<br>
					&lt;body&gt;<br>
						<strong>&lt;?php<br>
						print date("Y/m/d");<br>
						?&gt;</strong><br>
					&lt;/body&gt;<br>
				&lt;/html&gt;
				</code>
			</pre>
            <p>Khi bạn truy cập trang web của bạn thông qua một trình duyệt, máy chủ web sẽ phân tích cú pháp, đọc qua các dòng trang HTML của bạn và khi nó đi qua một ngôn ngữ lập trình (ở đây ta thấy đoạn mã thuộc ngôn ngữ lập trình php), nó sẽ thực thi mã lệnh này.
             Trong trường hợp này, ta sẽ thấy khi chạy trên trình duyệt, sẽ hiển thị ngày hiện tại trên trang trình duyệt của bạn, ngoài ra không thấy những gì lập trình bên dưới. Vào một thời điểm khác, bạn thực thi trang web một lần nữa, bạn sẽ thấy hiển thị một thời gian khác.
             Đây chính là một ví dụ nhỏ về tính động (Dynamic) của trang web .</p>
            <h3>Ngôn ngữ lập trình web</h3>
            <p>Tất cả các lập trình web đều được thực hiện với <em> ngôn ngữ lập trình web</em>. Các ngôn ngữ này bào gồm các ngôn ngữ lập trình công nghệ tĩnh (static) như là HTML, XHTML, CSS, JavaScript và XML.

                Tuy nhiên, hầu hết lập trình trang web được thực hiện bằng ngôn ngữ lập trình phía server (server-side). 
                Mã này chạy trên máy chủ và sau đó cung cấp thông tin tĩnh trở lại trình duyệt web.
                 Các ngôn ngữ lập trình web phổ biến nhất là: PHP, ASP.NET, Ruby on Rails, Perl, ASP cổ điển, Python, và JSP.
            </p>
            <ul>
              <li><a href="#">Tìm hiểu về PHP.</a></li>
            </ul>
           
          </div><!-- /.blog-post -->

<!--          <div class="blog-post">-->
<!--            <h2 class="blog-post-title">Another blog post</h2>-->
<!--            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>-->
<!---->
<!--            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>-->
<!--            <blockquote>-->
<!--              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
<!--            </blockquote>-->
<!--            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>-->
<!--          </div>-->

<!--          <div class="blog-post">-->
<!--            <h2 class="blog-post-title">New feature</h2>-->
<!--            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>-->
<!---->
<!--            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>-->
<!--            <ul>-->
<!--              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>-->
<!--              <li>Donec id elit non mi porta gravida at eget metus.</li>-->
<!--              <li>Nulla vitae elit libero, a pharetra augue.</li>-->
<!--            </ul>-->
<!--            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>-->
<!--          </div>-->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div>
		<!-- Sidebar -->
		<?php include 'inc/sidebar.php';?>
        <!-- End sidebar -->

      </div>
   </div>
   <?php include 'inc/footer.php';?>
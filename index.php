<?php $title = 'Lập trình PHP - PHP Programing - PHP Development'; ?>
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
            <em>Bài viết liên quan</em>
            <ul>
              <li><a href="http://kungfuphp.com/chi-tiet-blog.php?id_blog=1">Có nên tập trung quá nhiều vào Framework ?</a></li>
            </ul>
           
          </div>

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
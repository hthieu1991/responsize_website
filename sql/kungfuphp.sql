-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2014 at 04:54 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kungfuphp`
--
CREATE DATABASE IF NOT EXISTS `kungfuphp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kungfuphp`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `inp_user` varchar(255) NOT NULL,
  `upd_user` varchar(255) NOT NULL,
  `inp_date` datetime NOT NULL,
  `upd_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `inp_user`, `upd_user`, `inp_date`, `upd_date`) VALUES
(1, 'PHP cơ bản', 'admin', 'admin', '2014-11-22 18:06:43', '2014-11-22 18:06:43'),
(2, 'PHP nâng cao', 'admin', 'admin', '2014-11-22 18:07:12', '2014-11-22 18:07:12'),
(3, 'Blogs', 'admin', 'admin', '2014-11-22 22:12:49', '2014-11-22 22:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `inp_user` varchar(50) NOT NULL,
  `upd_user` varchar(50) NOT NULL,
  `inp_date` datetime NOT NULL,
  `upd_date` datetime NOT NULL,
  PRIMARY KEY (`thread_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `cat_id`, `title`, `short_content`, `content`, `inp_user`, `upd_user`, `inp_date`, `upd_date`) VALUES
(1, 1, 'Có nên tập trung quá nhiều vào framework ?', 'Cũng tích cóp, lượm lặt được kha khá kinh nghiệm trong quá trình làm và phát triển web vơi PHP, nay minh muốn chia sẽ với các bạn chủ đề "Có nên tập trung quá nhiều vào framework ?"', '<hr />\r\n<p>M&igrave;nh sẽ đưa ra những quan điểm c&aacute; nh&acirc;n về mặt tốt v&agrave; mặt xấu của <a href="http://localhost:8080/responsize_website/chi-tiet-blog.php?id_blog=1#" title="PHP Framework">Framework </a> để c&aacute;c bạn c&oacute; c&aacute;i nh&igrave;n r&otilde; hơn</p>\r\n\r\n<h4>A) Tại sao n&ecirc;n ?</h4>\r\n\r\n<h5><strong>1) C&aacute;ch tổ chức code v&agrave; danh s&aacute;ch files</strong></h5>\r\n\r\n<p>Khi bạn tổ c&agrave;i đặt một PHP Framework, n&oacute; đ&atilde; c&oacute; sẵn một cấu tr&uacute;c bao gồm c&aacute;c folder v&agrave; tập tin nhất định V&agrave; từ đ&oacute; bạn c&oacute; thể follow theo c&aacute;i cấu tr&uacute;c đ&oacute; như một ti&ecirc;u chuẩn để tạp ra c&aacute;c ứng dụng website th&iacute;ch hợp</p>\r\n\r\n<h5><strong>2) C&aacute;c tiện &iacute;ch v&agrave; thư viện hỗ trợ</strong></h5>\r\n\r\n<p>C&aacute;c PHP Framework th&ocirc;ng thường được một đội ngũ kĩ sư lập tr&igrave;nh d&agrave;y dạn kinh nghiệm ph&aacute;t triển, v&agrave; họ đ&atilde; x&acirc;y dựng sẵn cho ch&uacute;ng ta c&aacute;c thư vi&ecirc;n hỗ trợ phong ph&uacute;, điều n&agrave;y l&agrave; một lợi điểm rất lớn khi m&agrave; ch&uacute;ng ta kh&ocirc;ng muốn phải bắt đầu x&acirc;y dựng to&agrave;n bộ hệ thống website.<br />\r\nTh&ocirc;ng thường những thư viện bao gồm :<br />\r\n-Form Validation<br />\r\n-Input/Output filtering<br />\r\n-Database Abstraction<br />\r\n-Session and Cookie Handling<br />\r\n-Email, Calendar, Pagination etc&hellip;</p>\r\n\r\n<p><img alt="flowchart php" src="http://localhost:8080/responsize_website/bootstrap/img/appflowchart.gif" style="height:205px; width:697px" title="flowchart php" /></p>\r\n\r\n<h5><strong>3) M&ocirc; h&igrave;nh MVC</strong></h5>\r\n\r\n<p>Cấu tr&uacute;c m&ocirc; h&igrave;nh MVC bao gồm:<br />\r\n- Model : Bao gồm c&aacute;c xử l&yacute;, truy vấn data, bộ mặt đại diện cho cấu tr&uacute;c của dữ liệu<br />\r\n- Controller : Điều hướng c&aacute;c y&ecirc;u cầu, v&agrave; xử l&yacute; c&aacute;c y&ecirc;u cầu đ&oacute;<br />\r\n- View : Hiển thị c&aacute;c output ra ph&iacute;a người d&ugrave;ng c&oacute; thể thấy được</p>\r\n\r\n<p>Cấu tr&uacute;c n&agrave;y rất r&otilde; r&agrave;ng v&agrave; dễ cho việc bảo tr&igrave; đối với c&aacute;c hệ thống lớn v&agrave; phức tạp</p>\r\n\r\n<h5><strong>4) Bảo mật</strong></h5>\r\n\r\n<p>C&aacute;c PHP Framework th&ocirc;ng thường hỗ trợ kh&aacute; nhiều biện ph&aacute;p chống những cuộc tấn c&ocirc;ng nhất định<br />\r\nChẳng hạn như l&agrave;<br />\r\n-SQL Ejection<br />\r\n-Form Helper , Url Helper<br />\r\n-XSS Attack</p>\r\n\r\n<h5><strong>5) Code &iacute;t v&agrave; ph&aacute;t triển nhanh hơn</strong></h5>\r\n\r\n<p>Điều n&agrave;y l&agrave; tất yếu bởi Framework được x&acirc;y dựng sẵn c&aacute;c thư viện hỗ trợ, gi&uacute;p cho code &iacute;t hơn nhưng l&agrave;m được nhiều việc hơn</p>\r\n\r\n<h5><strong>6) Đội ngũ hỗ trợ lớn</strong></h5>\r\n\r\n<p>Hầu hết c&aacute;c Framework lớn hoặc phổ biến thường đứng sau đố l&agrave; một hệ thống hỗ trợ d&agrave;y dạn kinh nghiệm, đồng thời th&ocirc;ng qua c&aacute;c diễn đ&agrave;n việc giải đ&aacute;p c&aacute;c thắc mắc sẽ nhanh ch&oacute;ng hơn</p>\r\n\r\n<h4>C) Tại sao kh&ocirc;ng n&ecirc;n?</h4>\r\n\r\n<h5><strong>1) Bạn sẽ học được nhiều hơn khi kh&ocirc;ng sử dụng Framework</strong></h5>\r\n\r\n<p>Theo m&igrave;nh điều n&agrave;y l&agrave; qu&aacute; r&otilde; r&agrave;ng, bởi v&igrave; khi kh&ocirc;ng d&ugrave;ng Framework, bạn phải tự m&agrave;y m&ograve;, code từ A-Z, v&agrave; từ đ&oacute; bạn sẽ hiểu s&acirc;u hơn về d&ograve;ng chảy của code, d&ograve;ng chảy của dữ liệu. Đồng thời khi tự code bạn học được c&aacute;i nền, c&aacute;i cơ bản, v&agrave; từ c&oacute; thể từ đ&oacute; biết đ&acirc;u bạn sẽ tự s&aacute;ng tạo được một framework mới hay hơn so với c&aacute;c framework hiện nay.<br />\r\nMột bằng chứng đ&aacute;ng n&oacute;i l&agrave; khi m&igrave;nh qu&aacute; phụ thuộc v&agrave;o framwork, m&igrave;nh sẽ dần qu&ecirc;n đi c&aacute;c kiến thức căn bản hay n&oacute;i n&ocirc;m na l&agrave; &quot;lục ngh&ecirc;&quot;, v&agrave; điều n&agrave;y m&igrave;nh đ&atilde; từng trải qua v&agrave; m&igrave;nh rất thấm th&iacute;a n&oacute;</p>\r\n\r\n<h5><strong>2) Khả năng bảo mật</strong></h5>\r\n\r\n<p>Điều n&agrave;y c&oacute; vẻ m&acirc;u thuẫn v&igrave; ở lợi điểm ph&iacute;a tr&ecirc;n m&igrave;nh cũng n&oacute;i l&agrave; Framework bảo mật. Điều tr&ecirc;n đ&uacute;ng v&agrave; điều n&agrave;y cũng đ&uacute;ng, một hệ thống khi bạn tự ph&aacute;t triển ra, những &yacute; tưởng, những điều ẩn giấu th&igrave; chỉ mỗi m&igrave;nh bạn biết, v&agrave; đem so với một framework đ&atilde; được nhiều người ph&aacute;t triển v&agrave; biết đến th&igrave; vấn đề bảo mật n&agrave;y cũng rất đ&aacute;ng đề cao</p>\r\n\r\n<h5><strong>3) Mục đ&iacute;ch ph&aacute;t triển</strong></h5>\r\n\r\n<p>Một ứng dụng do ch&iacute;nh bạn tự thiết kế th&igrave; ắt hẳn bạn cũng đ&atilde; chủ động x&acirc;y dựng n&oacute; ph&ugrave; hợp với mục đ&iacute;ch ph&aacute;t triển của ứng dụng, loại bỏ đi c&aacute;c thư viện hỗ trợ dư thừa của c&aacute;c framework, đồng thời theo m&igrave;nh nghĩ th&igrave; ắt hẳn ứng dụng của bạn cũng sẽ nhanh hơn</p>\r\n\r\n<h5><strong>4) C&aacute;c website quy m&ocirc; vừa v&agrave; nhỏ</strong></h5>\r\n\r\n<p>Th&ocirc;ng thường với c&aacute;c website quy m&ocirc; vừa v&agrave; nhỏ, đ&ocirc;i khi tự ph&aacute;t triển lại nhanh hơn v&agrave; kh&ocirc;ng nhất thiết phải xử dụng một framework cồng kềnh...</p>\r\n', 'admin', 'admin', '2014-11-22 22:35:33', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

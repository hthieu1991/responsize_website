<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
// thông tin file config và sql
include('config.php');
$sql_table_topics = "".$table_prefix."topics";
$sql_table_forums = "".$table_prefix."forums";
$sql_table_users = "".$table_prefix."users";
$sql_table_config = "".$table_prefix."config";

//kết nối SQL
$conn = mysql_connect($dbhost, $dbuser, $dbpasswd);
if ( !$conn ) {
    //Không kết nối được, thoát ra và báo lỗi
    die("không nết nối được vào MySQL server: ".mysql_error($conn));
} //end if
//chọn CSDL để làm việc
mysql_select_db($dbname, $conn)
    or die("Không thể chọn được CSDL: ".mysql_error($conn));

//Kiểu truy cập server_protocol
$sql_server_protocol = "SELECT * FROM $sql_table_config WHERE `config_name` LIKE 'server_protocol'";
$result_server_protocol = mysql_query($sql_server_protocol, $conn);
if ( !$result_server_protocol )
    die("Không thể thực hiện được câu lệnh SQL: ".mysql_error($conn));
while ( $row_server_protocol = mysql_fetch_assoc($result_server_protocol) ) {$server_protocol = "".$row_server_protocol[config_value]."";} //end while
//nên luôn giải phóng bộ nhớ sau khi lấy hết các row trả về từ câu lệnh SELECT
mysql_free_result($result_server_protocol);

//Đường dẫn diễn đàn
$sql_server_name = "SELECT * FROM $sql_table_config WHERE `config_name` LIKE 'server_name'";
$result_server_name = mysql_query($sql_server_name, $conn);
if ( !$result_server_name )
    die("Không thể thực hiện được câu lệnh SQL: ".mysql_error($conn));
while ( $row_server_name = mysql_fetch_assoc($result_server_name) ) {$server_name = "".$row_server_name[config_value]."";} //end while
//nên luôn giải phóng bộ nhớ sau khi lấy hết các row trả về từ câu lệnh SELECT
mysql_free_result($result_server_name);

//Đường dẫn thư mục diễn đàn
$sql_script_path = "SELECT * FROM $sql_table_config WHERE `config_name` LIKE 'script_path'";
$result_script_path = mysql_query($sql_script_path, $conn);
if ( !$result_script_path )
    die("Không thể thực hiện được câu lệnh SQL: ".mysql_error($conn));
while ( $row_script_path = mysql_fetch_assoc($result_script_path) ) {$script_path = "".$row_script_path[config_value]."";} //end while
//nên luôn giải phóng bộ nhớ sau khi lấy hết các row trả về từ câu lệnh SELECT
mysql_free_result($result_script_path);

$linkwebsite = "$server_protocol$server_name$script_path";

// Thông tin file xml, không edit mục này
$header_xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<rss version=\"2.0\">\n<channel>\n<title>Sitemap VBB ".$linkwebsite."</title>\n<description>Powered by Nguyễn Thanh Phong http://www.goctamhon.com</description>\n<link>".$linkwebsite."</link>\n<ttl>1</ttl>\n";
$footer_xml = "<item><title>Góc tâm hồn, nghệ thuật sống, bài học cuộc sống, hạt giống tâm hồn, học làm người</title><link>http://www.goctamhon.com</link></item>\n</channel>\n</rss>";
$file_topic = fopen("topic.xml", "w+");
fwrite($file_topic, $header_xml);
$file_forum = fopen("forum.xml", "w+");
fwrite($file_forum, $header_xml);
$file_user = fopen("user.xml", "w+");
fwrite($file_user, $header_xml);

// Chọn sql topic
$sql_topic = "SELECT * FROM $sql_table_topics";
$result_topic = mysql_query($sql_topic, $conn);
if ( !$result_topic )
    die("Không thể thực hiện được câu lệnh SQL: ".mysql_error($conn));
while ( $row_topic = mysql_fetch_assoc($result_topic) ) {
    fwrite($file_topic, "<item><title>".$row_topic['topic_title']."</title><link>".$linkwebsite."/viewtopic.php?t=".$row_topic['topic_id']."</link></item>\n");
    } //end while
//nên luôn giải phóng bộ nhớ sau khi lấy hết các row trả về từ câu lệnh SELECT
mysql_free_result($result_topic);

// Chọn sql forum
$sql_forum = "SELECT * FROM $sql_table_forums";
$result_forum = mysql_query($sql_forum, $conn);
if ( !$result_forum )
    die("Không thể thực hiện được câu lệnh SQL: ".mysql_error($conn));
while ( $row_forum = mysql_fetch_assoc($result_forum) ) {
    fwrite($file_forum, "<item><title>".$row_forum['forum_name']."</title><link>".$linkwebsite."/viewforum.php?f=".$row_forum['forum_id']."</link></item>\n");
    } //end while
//nên luôn giải phóng bộ nhớ sau khi lấy hết các row trả về từ câu lệnh SELECT
mysql_free_result($result_forum);

// Chọn sql user
$sql_user = "SELECT * FROM $sql_table_users";
$result_user = mysql_query($sql_user, $conn);
if ( !$result_user )
    die("Không thể thực hiện được câu lệnh SQL: ".mysql_error($conn));
while ( $row_user = mysql_fetch_assoc($result_user) ) {
    fwrite($file_user, "<item><title>".$row_user['username']."</title><link>".$linkwebsite."/memberlist.php?u=".$row_user['user_id']."</link></item>\n");
    } //end while
//nên luôn giải phóng bộ nhớ sau khi lấy hết các row trả về từ câu lệnh SELECT
mysql_free_result($result_user);

// Kết thúc không edit mục này
fwrite($file_topic, $footer_xml);
fclose($file_topic);
fwrite($file_forum, $footer_xml);
fclose($file_forum);
fwrite($file_user, $footer_xml);
fclose($file_user);
//đóng kết nối
mysql_close($conn);
echo "Đã tạo xong sitemap !! Bạn hãy vào:<br><a href=\"http://www.google.com/webmasters/sitemaps\" target=\"_blank\">Google Sitemaps</a><br><a href=\"https://siteexplorer.search.yahoo.com/submit\" target=\"_blank\">Yahoo Site Explorer</a><br><a href=\"http://search.msn.com/docs/submit.aspx\" target=\"_blank\">Live Search</a><br>để submit sitemap của bạn cho họ với các file xml sau:<br><a href=topic.xml target=\"_blank\">".$linkwebsite."/topic.xml</a><br><a href=forum.xml target=\"_blank\">".$linkwebsite."/forum.xml</a><br><a href=user.xml target=\"_blank\">".$linkwebsite."/user.xml</a><br><center>Powered by Nguyễn Thanh Phong <a href=\"http://www.goctamhon.com\" target=\"_blank\">http://www.goctamhon.com</a></center>";
?>


Link: http://www.ddth.com/showthread.php/339358-Cần-1-scrip-làm-Sitemap-với-số-lượng-Link-lớn#ixzz3KSRgqrek

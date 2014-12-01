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
<?php
include("../../lib/connection.php");
if(isset($_GET["flg_add_cat"])){
	$cat_name = $_POST["cat_name"];
	$admin = 'admin';
	$sql = "INSERT INTO category(
									cat_name,
									inp_user,
									upd_user,
									inp_date,
									upd_date
								) VALUES (
									'$cat_name',
									'$admin',
									'$admin',
									NOW(),
									NOW()
								)";

	mysqli_query($conn,$sql);
	$array = array("status" => 200 , "message" => "done" , "data" => "");
	echo json_encode($array);
}
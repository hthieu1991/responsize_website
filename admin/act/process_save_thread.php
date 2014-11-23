<?php
include("../../lib/connection.php");
//Add new
if(isset($_POST["btn_save"])){
	$cat_id = $_POST["category"];
	$title = $_POST["title"];
	$short_content = $_POST["short_content"];
	$content = $_POST["content"];
	$admin = 'admin';
	$sql = "INSERT INTO thread(
									cat_id,
									title,
									short_content,
									content,
									inp_user,
									upd_user,
									inp_date,
									upd_date
								) VALUES (
									$cat_id,
									'$title',
									'$short_content',
									'$content',
									'$admin',
									'$admin',
									NOW(),
									NOW()
								)";

	mysqli_query($conn,$sql);
	header("Location: ../danh-sach-bai-viet.php");
}
//Update
if(isset($_POST["btn_update"])){
	$id = $_POST["thread_id"];
	$cat_id = $_POST["category"];
	$title = $_POST["title"];
	$short_content = $_POST["short_content"];
	$content = $_POST["content"];
	$admin = 'admin';
	$sql = "UPDATE thread 
			SET cat_id = $cat_id,
				title = '$title',
				short_content = '$short_content',
				content = '$content',
				upd_date = 'NOW()',
				upd_user = '$admin'
			WHERE thread_id = $id";
	mysqli_query($conn,$sql);
	header("Location: ../danh-sach-bai-viet.php");
}


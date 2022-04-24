<?php 
$edit= mysqli_query($con,"SELECT * FROM answers WHERE id_question='$_GET[id]' ");
foreach ($edit as $d){
	$target = '../../assets/img/img_Answers/';
	$image_old = $target.$d['image'];
	unlink($image_old);
	$image_old_en = $target.$d['image_en'];
	unlink($image_old_en);
}

$edit2= mysqli_query($con,"SELECT * FROM questions WHERE id='$_GET[id]' ");
foreach ($edit2 as $d2){
	$target2 = '../../assets/img/img_Questions/';
	$image_old2 = $target2.$d2['image'];
	unlink($image_old2);
	$image_old2_en = $target2.$d2['image_en'];
	unlink($image_old2_en);
}

$sql=mysqli_query($con,"DELETE FROM answers WHERE id_question='$_GET[id]' ");

$sql2=mysqli_query($con,"DELETE FROM questions WHERE id='$_GET[id]' ");

	if ($sql2) {
	echo "
	<script type='text/javascript'>
	setTimeout(function () {
	swal({
	title: 'Sukses',
	text:  'Data Telah Terhapus !',
	type: 'success',
	timer: 3000,
	showConfirmButton: true
	});     
	},10);  
	window.setTimeout(function(){ 
	window.location.replace('?page=case&act=soal&id=$_GET[id_case]');
	} ,1000);   
	</script>";
	}

 ?>
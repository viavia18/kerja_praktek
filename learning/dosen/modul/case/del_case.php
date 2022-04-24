<?php 
$edit= mysqli_query($con,"SELECT * FROM reviews WHERE id='$_GET[id]' ");
foreach ($edit as $d){
	$target = '../../assets/img/img_Reviews/';
	if(!empty($target.$d['image'])){
		$image_old = $target.$d['image'];
		unlink($image_old);
	}
	if(!empty($target.$d['image_en'])){
		$image_old_en = $target.$d['image_en'];
		unlink($image_old_en);
	}
}

$sql_review=mysqli_query($con,"DELETE FROM reviews WHERE id='$_GET[id]' ");

$edit2= mysqli_query($con,"SELECT * FROM questions WHERE id_case='$_GET[id]' ");
foreach ($edit2 as $d2){
	$target2 = '../../assets/img/img_Questions/';
	if(!empty($target2.$d2['image'])){
		$image_old2 = $target2.$d2['image'];
		unlink($image_old2);
	}
	if(!empty($target2.$d2['image_en'])){
		$image_old2_en = $target2.$d2['image_en'];
		unlink($image_old2_en);
	}
	
	$edit3= mysqli_query($con,"SELECT * FROM answers WHERE id_question='$d2[id]' ");
	foreach ($edit3 as $d3){
		$target3 = '../../assets/img/img_Answers/';
		if(!empty($target.$d3['image'])){
			$image_old3 = $target3.$d3['image'];
			unlink($image_old3);
		}
		if(!empty($target.$d3['image_en'])){
			$image_old3_en = $target3.$d3['image_en'];
			unlink($image_old3_en);
		}
	}
	
	$sql_answer=mysqli_query($con,"DELETE FROM answers WHERE id_question='$d2[id]' ");
}


$sql_question=mysqli_query($con,"DELETE FROM questions WHERE id_case='$_GET[id]' ");

$edit4= mysqli_query($con,"SELECT * FROM cases WHERE id='$_GET[id]' ");
foreach ($edit4 as $d4){
	$target4 = '../../assets/img/img_Cases/';
	if(!empty($target.$d4['image'])){
		$image_old4 = $target4.$d4['image'];
		unlink($image_old4);
	}
}

$sql_case=mysqli_query($con,"DELETE FROM visitors WHERE id='$_GET[id]' ");

$sql_case=mysqli_query($con,"DELETE FROM cases WHERE id='$_GET[id]' ");

	if ($sql) {
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
	window.location.replace('?page=case');
	} ,1000);   
	</script>";
	}

 ?>
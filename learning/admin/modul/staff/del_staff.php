<?php
$edit= mysqli_query($con,"SELECT * FROM staff WHERE id='$_GET[id]' ");
foreach ($edit as $d){
	$target = '../vendor/images/img_Users/';
	$image_old = $target.$d['image'];
	unlink($image_old);
}

$del = mysqli_query($con,"DELETE FROM staff WHERE id='$_GET[id]' ") or die(mysqli_error($con));
if ($del) {	

	echo "
	<script type='text/javascript'>
	setTimeout(function () {
	swal({
	title: 'SUKSES',
	text:  'Data Telah dihapus !!',
	type: 'success',
	timer: 3000,
	showConfirmButton: true
	});     
	},10);  
	window.setTimeout(function(){ 
	window.location.replace('?page=staff');
	} ,3000);   
	</script>";
}

 ?>
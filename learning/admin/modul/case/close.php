<?php 

$close = mysqli_query($con,"UPDATE cases SET status='0' WHERE id='$_GET[case]'  ");

    if ($close) {
		echo "
			<script type='text/javascript'>
			setTimeout(function () {
			swal({
			title: 'CASE TELAH DITUTUP',
			text:  'Terimakasih',
			type: 'success',
			timer: 2000,
			showConfirmButton: true
			});     
			},10);  
			window.setTimeout(function(){ 
			window.location.replace('?page=case');
			} ,3000);   
		</script>";
  }

 ?>
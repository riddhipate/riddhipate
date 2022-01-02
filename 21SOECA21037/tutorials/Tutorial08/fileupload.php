<?php
	if(isset($_FILES['image'])){
		echo "<pre>"
		print_r($_FILES);
		echo "</pre>";
		
		 move_uploaded_file($file_tmp,"upload-images/". $file_name);
	}
?>
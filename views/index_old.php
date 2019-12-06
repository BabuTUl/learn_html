	<?php include_once('views/shared/header.php') ?>

	<?php
	$page=(!empty($_GET['page']))?$_GET['page']:'home';/*if and :indicate else*/
	$viewPage='views/'.$page.".php";
	if(file_exists($viewPage)){
		include_once($viewPage);
	}else{
		echo"<h1>404 Not Found</h1>";
	}

	?>


	<?php include_once('views/shared/footer.php') ?>



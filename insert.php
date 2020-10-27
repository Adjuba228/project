<?php
	$con = mysqli_connect("127.0.0.1","root","","proekt");
	$q = mysqli_query($con,"INSERT INTO site (name,text,img,count) VALUES ('{$_GET["name"]}','{$_GET["text"]}','{$_GET["img"]}','{$_GET["count"]}')");
?>
<?php
  	 header("Location: http://proekt/");
 	 exit();
?>

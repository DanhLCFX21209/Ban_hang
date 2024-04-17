<?php 
	$tv="select * from footer limit 0,1";
	$tv_1=$conn->query($tv);
	$tv_2=$tv_1->fetch_assoc();
	echo $tv_2['html'];
?>
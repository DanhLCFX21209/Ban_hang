<?php 
	$tv="select * from menu_doc order by id";
	$tv_1=$conn->query($tv);
	echo "<div class='menu_doc' >";
	while($tv_2=$tv_1->fetch_assoc())
	{
		$link="?thamso=xuat_san_pham&id=".$tv_2['id'];
		echo "<a href='$link'>";
			echo $tv_2['ten'];
		echo "</a>";
	}
	echo "</div>";
?>
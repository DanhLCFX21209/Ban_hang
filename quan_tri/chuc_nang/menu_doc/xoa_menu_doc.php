<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select count(*) from san_pham where thuoc_menu='$id' ";
	$tv_1=$conn->query($tv);
	$tv_2=$tv_1->fetch_assoc();
	if($tv_2[0]==0)
	{
		$truy_van_xoa="DELETE FROM menu_doc WHERE id = $id ";
		mysql_query($truy_van_xoa);
	}
	else 
	{
		thong_bao_html("Menu này vẫn còn dữ liệu nên không thể xóa");
	}
?>
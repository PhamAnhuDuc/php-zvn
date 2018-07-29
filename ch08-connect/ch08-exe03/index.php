<?php 
	require_once 'connect.php';
	//Lấy toàn bộ dữ kiệu Group
	$query[] 	= "SELECT `g`.`id`,`g`.`name`,`g`.`status`,`g`.`ordering`, COUNT(`u`.id) AS total";
	$query[] 	= "FROM `group` AS `g` LEFT JOIN `user` AS `u` ON `g`.`id` = `u`.`group_id`";
	$query[] 	= "GROUP BY `g`.`id`";
	$query		= implode(" ", $query); //chuyển mảng thành chuỗi
	
	//biến de hung du lieu
	$list		= $database->listRecord($query); //=> llay ra dc du lieu roi do no ra
		echo "<pre>";
		print_r($list);
		echo "</pre>";
	$xhtml = '';

	//kiểm tra mảng $list khác rỗng thì mới thực hiện đổ dữ liệu
	if(!empty($list)){
		$i = 0 ;
		foreach ($list as $item) {
			$row = ($i % 2) == 0 ? 'odd' : 'even';
			$id = $item['id'];
			$status = ($item['status'] == 0 )  ? 'active' : 'Inactive';
			//name="checkbox[]" : ở dạng mảng để nhận được các id mà chúng ta check vào
			$xhtml .= '<div class="row ">
	            	<p class="no">
	            		<input type="checkbox" name="checkbox[]" value="'.$id.'">
	            	</p>
	                <p class="name">'.$item['name'].'</p>
	                <p class="id">'.$id.'</p>
	                <p class="size">'.$status.'</p>
	                <p class="size">'.$item['ordering'].'</p>
	                <p class="size">'.$item['total'].'</p>
	                <p class="action">
	                	<a href="edit.php?id='.$id.'">Edit</a>|
	                	<a href="delete.php?id='.$id.'">Delete</a>
	                </p>
	            	</div>';
	        $i++;    	
			// $xhtml .= ''; 
		}
	}else {
		$xhtml = 'dữ liệu đang cập nhập';
	}
		
		
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE - Index</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#multy-delete').click(function(){ // khi click vào multil delete thì form tiến hành submit đi
			$('#main-form').submit();
		});
	});
</script>
</head>
<body>
	<div id="wrapper">
    	<div class="title">Megane User</div>
        <div class="list">   
			<form action="multy-delete.php" method="post" name="main-form" id="main-form">
	         	<div class="row odd" style="text-align: center; font-weight: bold">
	            	<p class="no">
	            		<input type="checkbox" name="checkbox[]" value="'.$id.'">
	            	</p>
	                <p class="name">Group Name</p>
	                <p class="id">ID</p>
	                <p class="size">Status</p>
	                <p class="size">Ordering</p>
	                <p class="size">Member</p>
	                <p class="action">Action</p>
	            </div>
	            <?php echo $xhtml; ?>
	    	</form>
    	</div>
	        <div id="area-button">
	        	<a href="add.php">Add Group</a>
	        	<a id="multy-delete" href="#">Delete group</a>
	        </div>
    </div>
</body>
</html>

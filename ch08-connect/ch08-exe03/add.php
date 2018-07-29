<?php
	require_once 'class/HTML.class.php';
	require_once 'class/Validate.class.php';
	require_once 'connect.php';
	$error = '';
	$outValidate = [];
	$success = '';

	echo($_GET);
	//thực hiện validate => kiểm tra người dùng post dữ liệu qua hay chưa
	if(!empty($_POST)){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";

		$validate = new Validate($_POST); //tạo đối tượng validate
		$validate->addRule('name','string',2,50) //giá trị name phải là kiểu string độ dài từ 2 đến 50 kí tự
				 ->addRule('ordering','int',1,10)//ordering phải là số , giá trị nhỏ nhất là 1 lớn nhất là 10
				 ->addRule('status','status',1,10); 
		$validate->run(); // thuc hien validate
		$error = $validate->getError();
		$outValidate = $validate->getResult();	//giữ lại các phần tử ở trong ô input đúng
		if(!$validate->isValid()){
			$error = $validate->showErrors(); //thực hiện hiển thị lỗi đó ra
		}else{ //khi dữ liệu đúng thì thực hiện insert vào DB
			$database->insert($outValidate);
			$success = '<div class="success"> Success</div>';
			$outValidate = array(); //insert thành công thì gán lại cho nó = rỗng
		}
			// echo "<pre>";
			// print_r($errors);
			// echo "</pre>";
		
	}
		
	$arrStatus = array(2 =>'Select Status' , 1=>'active' , 0 => 'Inactive');	
	$status = '';
	@$status = HTML::createSelectbox($arrStatus, 'status', $outValidate['status']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE - ADD</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my.js"></script>
<script type="text/javascript">
	// $(document).ready(function(){
	// 	$('#cancel-button').click(function(){
	// 		window.location = 'index.php';
	// 	});
	// });
</script>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PHP FILE - ADD</div>
        <div id="form">  
        	<?php echo @$error.$success ?> 
			<form action="#" method="post" name="add-form">
				<div class="row">
					<p>Name</p>
					<input type="text" name="name" value="<?php echo @$outValidate['name'] ?>">
				</div>
				<div class="row">
					<p>Status</p>
					<?php echo $status ?>
				</div>
				<div class="row">
					<p>Ordering</p>
					<input type="text" name="ordering" value="<?php echo @$outValidate['ordering'] ?>">
				</div>
				<div class="row">
					<input type="submit" value="Save" name="submit">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
				</div>
			</form>    
        </div>
    </div>
</body>
</html>

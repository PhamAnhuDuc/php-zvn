<?php
	$course = array(
						array('id' => 2, 'name' => 'Zend Framework'),
						array('id' => 3, 'name' => 'Jquery Master'),
						array('id' => 4, 'name' => 'Joomla'),
				);
	echo $courseEncode = json_encode($course); // mã hóa sang chuỗi json
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<script type="text/javascript" src="js/json2.js"></script>
<script type="text/javascript">
	var str = '<?php echo $courseEncode;?>';  //đây là 1 chuỗi
	var myObject = JSON.parse(str);  // chuyển lại từ 1 chuỗi sang thành 1 mảng
	console.log(myObject[0].id);
	console.log(myObject[0].name);
</script>
</head>
<body>

</body>
</html>
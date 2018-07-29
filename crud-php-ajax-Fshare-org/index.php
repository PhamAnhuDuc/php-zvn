<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://fshare.org">Fshare.org cộng đồng chia sẻ miễn phí</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Thêm sửa xóa php kết hợp ajax cực bá đạo</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST">
			<div class="form-inline">
				<label>Họ</label>
				<input type="text" id="firstname" class="form-control"/>
				<label>Tên</label>
				<input type="text" id="lastname" class="form-control"/>
			</div>
			<br />
			<div class="form-inline">
				<label>Địa chỉ</label>
				<input type="text" id="address" class="form-control"/>
			</div>
			<br />
			<center><button type="button" id="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm vào</button><button type="button" id="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
		</form>
		<br />
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Tên</th>
					<th>Địa chỉ</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody id="data"></tbody>
		</table>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>
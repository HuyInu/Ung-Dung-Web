<?php
	include('php/code.php');
	$p=new NguoiDung;
?>
<html lang="vi">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>AdameatEva</title>
	<link rel="stylesheet" href="css/QuanLyTaiKhoanCss.css">
</head>

<body>
	<div class="Menu">
		<p> asdasd</p>
	</div>
	
	<section class="work">
		<div class="left">
			<button type="submit" name="qluser" class="butMenuLeft"> Quản lý người dùng</button>
			<button type="button" name="qllesson" class="butMenuLeft"> Quản lý bài học</button>
		</div>
		<div class="middle">
			<div class="list">
				<table class="bang">
						<tr>
							<th> ID </th>
							<th> Tên </th>
							<th> Email </th>
							<th> Tài khoản </th>
							<th> Mật khẩu </th>
							<th> </th>
						</tr>	
					<?php					
						$p->loadData('Select * from nguoidung');
					?>
				</table>
			</div >
			<form method="post">
				<button type="submit" name="butthemMoi" class="butThaoTac">+ Thêm người dùng mới</button>
			</form>
				<?php 
					if(isset($_POST['butthemMoi']))
					echo	'<div class="form">
				Thêm người dùng.
				<form method="post">
				  <div class="mb-3">
					  <label for="formGroupExampleInput" class="form-label">Tên</label>
					  <input type="text" class="form-control" name="Ten" id="formGroupExampleInput" placeholder="Tên">
					</div>
					<div class="mb-3">
					  <label for="formGroupExampleInput2" class="form-label">Email</label>
					  <input type="email" class="form-control" name="Email" id="formGroupExampleInput2" placeholder="Email">
					</div>
					<div class="mb-3">
					  <label for="formGroupExampleInput2" class="form-label">Tài khoản</label>
					  <input type="text" class="form-control" name="TK" id="formGroupExampleInput2" placeholder="Tài khoản">
					</div>
					<div class="mb-3">
					  <label for="formGroupExampleInput2" class="form-label">Mật khẩu</label>
					  <input type="password" class="form-control" name="MK" id="formGroupExampleInput2" placeholder="Mật khẩu">
					</div>
					<button type="submit" name="Them" class="btn btn-primary">Thêm</button>				
				</form>
			</div>'
				?>
			
			<?php 
						if(isset($_POST['Them']))
							$p->themUser($_POST['Ten'],$_POST['Email'],$_POST['TK'],$_POST['MK']);
						if(isset($_POST['butSua']))
							echo '<div class="form">
						Sửa người dùng.
				<form method="post">
				  <div class="mb-3">
					  <label for="formGroupExampleInput" class="form-label">Tên</label>
					  <input type="text" class="form-control" name="Ten" id="formGroupExampleInput" placeholder="Tên">
					</div>
					<div class="mb-3">
					  <label for="formGroupExampleInput2" class="form-label">Email</label>
					  <input type="email" class="form-control" name="Email" id="formGroupExampleInput2" placeholder="Email">
					</div>
					<div class="mb-3">
					  <label for="formGroupExampleInput2" class="form-label">Tài khoản</label>
					  <input type="text" class="form-control" name="TK" id="formGroupExampleInput2" placeholder="Tài khoản">
					</div>
					<div class="mb-3">
					  <label for="formGroupExampleInput2" class="form-label">Mật khẩu</label>
					  <input type="password" class="form-control" name="MK" id="formGroupExampleInput2" placeholder="Mật khẩu">
					</div>
					<button type="submit" name="Them" class="btn btn-primary">Thêm</button>				
				</form>
			</div>'
			?>
			
  		</div>
	</section>
	
</body>

</html>
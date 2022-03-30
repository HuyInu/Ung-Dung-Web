<?php
	include("../condb/condb.php");
	
	class NguoiDung
	{ 
	
	
		function loadData($sql)
		{
			$p=new csdl();
			$link=$p->connect();			
			$qr=mysqli_query($link,$sql);
			while($row=mysqli_fetch_array($qr)){
				$MaND=$row['MaND'];
				$Name=$row['Name'];
				$Email=$row['Email'];
				$TK=$row['TK'];
				$MK=$row['MK'];
				echo 	'<tr>
							<td> '.$MaND.'</td>
							<td> '.$Name.'</td>
							<td> '. $Email.'</td>
							<td> '. $TK.'</td>
							<td> '. $MK.'</td>
							<td> 
								<form method="post">
									<button type="label" name="butSua">Sửa</button> || 
									<label type="text" name="butXoa" class="butXoa">Xóa</label>
								</form>
							</td>
						</tr>';
			}
		}
		
		function themUser($Ten,$TK,$MK,$Email)
		{
			$p=new csdl();
			$link=$p->connect();
			$MK1=MD5($MK);
			$sql="insert into nguoidung values(null,'".$Ten."','".$Email."','".$TK."','".$MK1."')";
			mysqli_query($link,$sql);
			header("location: ../QuanLyTaiKhoan/QuanLyTaiKhoan.php");
		}
	}
	
?>
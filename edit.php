<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
    $conn = mysqli_connect("localhost","root","","yanuar_db");
    $id = $_GET['id'];
    $qry = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
    $data = mysqli_fetch_array($qry);{
	?>
	<form action="update.php" method="post">		
		<table>
            <tr>
                <td>id</td>
                <td><input type="text" name="id" value="<?php echo $data['id'] ?>"></td>
            </tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>					
			</tr>	
			<tr>
				<td>password</td>
				<td><input type="password" name="password" value="<?php echo $data['password'] ?>"></td>					
			</tr>	
			<tr>
				<td>level</td>
				<td><input type="text" name="level" value="<?php echo $data['level'] ?>"></td>					
			</tr>	
            <tr>
                <td>fullname</td>
                <td><input type="text" name="fullname" value="<?php echo $data['fullname'] ?>"></td>	
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
</head>
<body>
   <div class="container">
  	<h2><center>DATA PESERTA</center></h2>
  	<table align="center" border="1">
    <a href="input.php">Tambah Data Baru</a>
  <tr>
  	<th>ID</th>
  	<th>Username</th>
  	<th>Password</th>
  	<th>Level</th>
  	<th>Fullname</th>
		<th>action</th>
  </tr></div>
  <?php

  include('config.php');
  $sql_tampil ="SELECT * FROM users";
  $peserta=mysqli_query($conn,$sql_tampil);
   while($data=mysqli_fetch_array($peserta)){
  ?>
			<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td><?php echo $data['fullname']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
			<?php } ?>
</body>
</html>
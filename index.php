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
  </tr></div>
  <?php

  include('config.php');
  $sql_tampil ="SELECT * FROM users";
  $peserta=mysqli_query($conn,$sql_tampil);
   while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
  	echo'
  	</tr>
  		<td>'.$baris_data['id'].'</td>
  		<td>'.$baris_data['username'].'</td>
  		<td>'.$baris_data['password'].'</td>
  		<td>'.$baris_data['level'].'</td>
  		<td>'.$baris_data['fullname'].'</td>
   	</tr>';
  }
  ?>
</body>
</html>
<?php
require_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<h1>from</h1>
	<form action="prosesinsert.php"	method="POST">
		<div class="form-group row">
			<label for="nama" class="col-sm-1 col-form-label">nama user</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nama" placeholder=" masukan Nama user"clas="namauser"name="namauser">
			</div>
		</div>

		<div class="form-group row">
			<label for="email" class="col-sm-1 col-form-label">email user</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="alamat" placeholder="masukan email user"clas="emailuser"name="emailuser">
			</div>
		</div>

		<div class="form-group row">
			<label for="email" class="col-sm-1 col-form-label">password user</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="pesan" placeholder="password user"clas="passworduser"name="passworduser">
			</div>
		</div>

		<button type="submit" class="btn btn-primary col-12 col-md-8 col-lg-10">send</button>
	</form>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>no</th>
				<th>nama</th>
				<th>email</th>
			</tr>
		</thead>
		<tbody>	
			<?php 
			$sql ="SELECT*FROM tb_users";
			$result = $conn->query($sql);

			if($result->num_rows > 0){
				// akan di jlankan jika recodnya ada
				while($row = $result->fetch_assoc()){ ?>

					<tr>
						<td><?=$row['id_user']?></td>
						<td><?=$row['nama_user']?></td>
						<td><?=$row['EMAIL_user']?></td>
						<td>
							<a onclick="return confirm('anda yakin akan menghapus record ini?')"
							class="btn btn-danger"
							href="prosesdaleteuser.php?id=<?=$row
							['id_user']?>">
							delete
						</a>


					</td>
				</tr>
				<?php
					// <!-- echo "<tr>";
					// echo "<td>".$row['id_user']."</td>";
					// echo "<td>".$row['nama_user']."</td>";
					// echo "<td>".$row['EMAIL_user']."</td>";
					// echo "</tr>"; -->
			}
		}else{
				// akan di jalankan jika recodnya kosong
			echo "<tr><td colspan='3'>record masih kosong</td></tr>";
		}


		?>
	</tbody>

</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
        if(isset($_GET['pesan'=="gagal"])){
            if($GET['pesan']=="gagal"){
                echo "login gagal! username password anda salah";
            } else if($_GET['pesan'] == "logout") {
                echo "anda berhasil logout";
            } else if($_GET['pesan']=="belum_login") {
                echo '<script>alert("GAGAL SU."); document.location="index.php";</script>';
            }
        }
     ?>
	<br/>
	<br/>
	<center><h2>RM. YAKIN KENYANG</h2></center>	
	<div class="login">
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label><center><h3>FORM LOGIN</h3></center></label>
			</div>
			<div>
				<label>E-mail:</label>
				<input type="text" name="email" required="required" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" required="required" />
			</div>			
			<div>
				<input type="submit" value="LOGIN" class="tombol">
			</div>
		</form>
		<p>Belum punya Akun? <a href="daftar.php">Daftar disini</a></p>
	</div>
</body>
</html>
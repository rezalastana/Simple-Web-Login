<!DOCTYPE html>
<html>
<head>
  <title>Form Pendaftaran</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <br/>
  <br/>
  <center><h2>RM.YAKIN KENYANG</h2></center>  
  <div class="login">
    <form action="prosesdaftar.php" method="post">
      <div>
        <label><center><h3>FORM PENDAFTARAN</h3></center></label>
      </div>
      <div>
        <label>E-mail:</label>
        <input type="text" name="email" id="email" />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="password" id="password" />
      </div>      
      <div>
        <input type="submit" value="DAFTAR" class="tombol">
      </div>
    </form>
    <p>Sudah memiliki akun? <a href="index.php">Login disini</a></p>
  </div>
</body>
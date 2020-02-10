    <?php
    $conn=new mysqli('localhost','root','','login');
    $email   = $_POST['email'];
    $password = $_POST['password'];


    $query = mysqli_query($conn,"INSERT INTO tcc Values('$email','$password')") or die(mysqli_error($conn));

    if ($query) {
        echo "<script>alert('Berhasil menambahkan data.'); document.location='daftar.php';</script>";
    } else {
        echo "proses input gagal";
    }

    ?>
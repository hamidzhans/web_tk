<?php include "template/navbar.php";?>
<section class="hero-forms">
    <div class="hero-input">
	<h1>log in</h1>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username">
			<input type="password" name="pass" placeholder="Password">
			<button name="submit" class="simpan">Simpan</button>
		</form>
    </div>
</section>
</body>
</html>
<?php

			if(isset($_POST['submit'])){
				session_start();
				include "template/navbar.php";

				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$pas = md5($pass);

				$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$user' AND password = '$pas'");
				if(mysqli_num_rows($cek) > 0){
					$d = mysqli_fetch_object($cek);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id'] = $d->admin_id;
					header('location:index.php');  
				}else{
					echo '<script>alert("Username atau Password Anda salah!")</script>';
				}
			}
		?>
<?php include "template/footer.php";?>
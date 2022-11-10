<?php
require_once('config.php');

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";
   $select_user = " SELECT * FROM mhs WHERE email = '$email' ";


   $result = mysqli_query($conn, $select);
   $result_user = mysqli_query($conn, $select_user);


   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $row_user = mysqli_fetch_array($result_user);
      $_SESSION['nim'] = $row_user['nim'];


      if($row['user_type'] == 'Admin'){
            // Management User //
         $_SESSION['username'] = $row['email'];
         header('location:admin.php');

      }elseif($row['user_type'] == 'Mahasiswa'){

         $_SESSION['username'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location: mhs_data-diri.php');

      }
      elseif($row['user_type'] == 'Dosen'){

         $_SESSION['username'] = $row['email'];
         header('location:dosen_datamhs.php');

      }

      elseif($row['user_type'] == 'Departemen'){

         $_SESSION['username'] = $row['email'];
         header('location:departemen_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SIAP-SIAP</title>

		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.css" rel="stylesheet">

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<title>Input Pendaftaran</title>
		<script type="text/javascript" src="ajax.js"></script>

		<body onload="getProvinsi()"></body>

	</head>

<body class="bg-gradient-primary sidebar-toggled">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Hai Siap2 Ya..</h1>
                                    <div id="error" class="text-danger">
                                        <?php if (isset($error)) echo $error; ?>
                                    </div>
                                    </div>
                                        <form method="POST" autocomplete="on" action="">
                                          <?php
                                          if(isset($error)){
                                             foreach($error as $error){
                                                echo '<span class="error-msg">'.$error.'</span>';
                                             };
                                          };
                                          ?>
                                          <div class="form-group">
                                             <label for="username">Email</label>
                                             <input type="email" name="email" required placeholder="enter your email" class="form-control">
                                          </div>
                                          <div class="form-group">
                                             <label for="password">Password</label>
                                             <input type="password" name="password" required placeholder="enter your password" class="form-control">
                                          </div>
                                          <button type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="submit">Login</button>
                                       </form>
                                    <div class="text-center">
                                        <a class="small" href="register_form.php">Buat Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>









</body>

</html>
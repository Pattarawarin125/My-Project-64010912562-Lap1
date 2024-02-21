<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel ="stylesheet" href="style1.css">
   <title>ร้านกระเป๋า shop</title>
<head>
  <body>
    <div class="wrapper">
      <h1>Login</h1>
    
    <form>
    
      <div class="form-group">
       <?php
 include("connectdb.php");
 $sql = "SELECT * FROM `users`";
 $rs = mysqli_query($conn,$sql);
 while ($data = mysqli_fetch_array($rs)){
	 ?>
        <label for="email">Email Address</label>
        <input type="email" name="email"  class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password"  name="pwd" class="form-control">
    </div>
    <input class="btn btn-primary w-100" type="submit" value="Login">
  </form>
  <p>Don't have an account yet? <a href="register.html">Register Now.</a></p>
  </div>

<?php }
?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</head>
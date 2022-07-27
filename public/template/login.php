<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link real="stylesheet" type="text/css" href="css/stylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
  <div class="box-login">  
      <h2>login</h2>
      <form action="" method="POST">
         <head> <input type="text" name="user" placeholder="username"></head>
         <h2> <input type="password" name="pass" placeholder="password"></h2>
          <input type="submit" name="submit" value="login">
      </form>  
      <?php
        if(isset($_POST['submit'])){
            include 'koneksi.php';

            $user =$_POST['user'];
            $user =$_POST['pass'];

            $cek = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '".$user."' password = '".$pass."'");
        
            {
                echo '<script>window.location="index.html"</script>';
             }
            
             }
        ?>
    </div>
</body>
</html>
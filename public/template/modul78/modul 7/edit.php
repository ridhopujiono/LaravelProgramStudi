<?php
include_once("config.php");
 
if(isset($_POST['update']))
{   
    $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $no_hp = $_POST['no_hp'];
        
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',no_hp='$no_hp' WHERE npm=$npm");
    
    header("Location: index.php");
}
?>
<?php

$npm = $_GET['npm'];
 
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE npm=$npm");
 
while($user_data = mysqli_fetch_array($result))
{
    $npm = $user_data['npm'];
        $nama = $user_data['nama'];
        $alamat = $user_data['alamat'];
        $jenis_kelamin= $user_data['jenis_kelamin'];
        $no_hp = $user_data['no_hp'];
}
?>
<html>
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <title>Edit User Data</title>
</head>
 
<body>
    
    <div class="w-50 mx-auto border p-4 mt-5">
    <a href="index.php" class='btn btn-primary'><i class='fa fa-home'></i>Home</a>
    <form name="update_user" method="post" action="edit.php">
    
            
                <label>NPM</label>
                <input type="text" name="npm" value="<?php echo $npm;?>" class="form-control"readonly>
            
             
                <label>NAMA</label>
                <input type="text" name="nama" value="<?php echo $nama;?>" required class="form-control"required>
            
        
                <label>ALAMAT</label>
                <input type="text" name="alamat" value="<?php echo $alamat;?>" required class="form-control"required>
            
            
                <label>JENIS KELAMIN</label>
                <select name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>"  class="form-select"required>
                <option value="L"> L</option>
                <option value="P"> P</option>
                <option value="Lainya"> Lainya</option>
                </select>

                <label>NO HP</label>
                <input type="text" name="no_hp" value="<?php echo $no_hp;?>" required class="form-control"required>
            
                <input class="btn btn-success mt-3" type="submit" name="update" value="Update">
            
    
    </form>
</body>
            
</html>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY npm DESC");
?>

<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="">
    <title>Homepage</title>
</head>

<body>
<div class="container mt-5">
    <a href='add.php?npm=$user_data[npm]' class='btn btn-primary btn-md '><i class='fa fa-plus'></i>Create Data</a> 
    <table class="table table-striped table-hover table-bordered ">
 
    <thead class="table-dark">
        <th>NPM</th> <th>NAMA</th> <th>ALAMAT</th> <th>JENIS KELAMIN</th> <th>NO HP</th> <th>ACTION</th>
    </thead>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['npm']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['jenis_kelamin']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";    
        echo "<td> <a href='edit.php?npm=$user_data[npm]'class='btn btn-sm btn-warning'><i class='fa fa-edit'></i>Update</a>  <a href='delete.php?npm=$user_data[npm]'class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>
</body>
</html>


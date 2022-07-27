<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <title>Add Users</title>
</head>
 
<body>
    <div class="w-50 mx-auto border p-4 mt-5">
    <a href="index.php"class='btn btn-primary '><i class='fa fa-home'></i>Home</a>
 
    <form action="add.php" method="post" name="form1">
             
    <label>NPM</label>
                <input type="text" name="npm" required class="form-control"required>
            
             
                <label>NAMA</label>
                <input type="text" name="nama" required class="form-control"required>
            
        
                <label>ALAMAT</label>
                <input type="text" name="alamat"  required class="form-control"required>
            
            
                <label>JENIS KELAMIN</label>
                <select name="jenis_kelamin"   class="form-select"required>
                <option value="L"> L</option>
                <option value="P"> P</option>
                <option value="Lainya"> Lainya</option>
                </select>

                <label>NO HP</label>
                <input type="text" name="no_hp"  required class="form-control"required>
            
                <input class="btn btn-success mt-3" type="submit" name="Submit" value="Tambah Data">
            
        
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $no_hp = $_POST['no_hp'];
        
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO husen_1412200049(npm,nama,alamat,jenis_kelamin,no_hp) VALUES('$npm','$nama','$alamat','$jenis_kelamin','$no_hp')");
        
        echo "User added successfully. <a href='index.php'class='btn btn-sm btn-warning'><i class='fa fa-eye'></i>View Data</a>";
    }
    ?>
</body>
</html>

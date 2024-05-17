<?php
require 'fungsi.php';

$id = $_GET["id"];
 

$mhs = query("SELECT * FROM player WHERE id = $id ")[0];


    if( isset($_POST["submit"])){
        
        if( ubah($_POST) > 0){
            echo "<script>
                    alert('data berhasil diubah!');
                    document.location.href='program.php'
            </script>";
        }else{
            echo "<script>
            alert('data gagal diubah!');
            document.location.href='program.php'
    </script>";
        }

       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="program.css">
    <title>Ubah Data Player</title>
</head>
<body>
    <h1>Ubah Data Player</h1>
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
         
        <div class="form-group">
                    <label for="nama">nama  </label>
                    <input type="text" name="nama" id="nama"
                    required
                    value=<?= $mhs["nama"]; ?>>
                    </div>
                    <div class="form-group">
                    <label for="npm">npm  </label>
                    <input type="text" name="npm" id="npm"
                    value=<?= $mhs["npm"]; ?>>
                    </div>
                    <div class="form-group">
                    <label for="email">email  </label>
                    <input type="text" name="email" id="email"
                    value=<?= $mhs["email"]; ?>>
                    </div>
                    <div class="form-group">
                    <label for="password">password  </label>
                    <input type="text" name="password" id="password"
                    value=<?= $mhs["password"]; ?>>
                    </div>
                    <div class="form-group">
                    <label for="jenis_kelamin">jenis kelamin  </label>
                    <label for="pria">pria</label>
                    <input type="radio" id="pria" name="jenis_kelamin" value="pria" <?= $mhs['jenis_kelamin'] == 'pria' ? "checked" : "" ?>>
                    <label for="wanita">wanita</label>
	                <input type="radio" id="wanita" name="jenis_kelamin" value="wanita" <?= $mhs['jenis_kelamin'] == 'wanita' ? "checked" : "" ?>>
                    <label for="unknown">unknown</label>
	                <input type="radio" id="unknown" name="jenis_kelamin" value="unknown" <?= $mhs['jenis_kelamin'] == 'unknown' ? "checked" : "" ?>>
                    </div>
                    <div class="form-group">
                    <label for="umur">umur  </label>
                    <input type="text" name="umur" id="umur"
                    value=<?= $mhs["umur"]; ?>>
                    </div>
                    <div class="form-group">
                    <label for="asal">asal  </label>
                    <input type="text" name="asal" id="asal"
                    value=<?= $mhs["asal"]; ?>>
                    </div>
                    <div class="form-group">
                    <label for="no_hp">no hp  </label>
                    <input type="text" name="no_hp" id="no_hp"
                    value=<?= $mhs["no_hp"]; ?>>
                    </div>
                    <div class="form-group">
                    <label for="hobi">hobi  </label>
                    </div>
                    <div class="hobi">
                    <input type="checkbox" id="menyanyi" name="hobi"value="menyanyi" <?= $mhs['hobi'] == 'menyanyi' ? "checked" : "" ?>>
                    <label for="menyanyi">menyanyi</label>
	                <input type="checkbox" id="olahraga" name="hobi"value="olahraga" <?= $mhs['hobi'] == 'olahraga' ? "checked" : "" ?>>
                    <label for="olahraga">olahraga</label>
	                <input type="checkbox" id="menari" name="hobi"value="menari" <?= $mhs['hobi'] == 'menari' ? "checked" : "" ?>>
                    <label for="menari">menari</label>
	                <input type="checkbox" id="gaming" name="hobi"value="gaming" <?= $mhs['hobi'] == 'gaming' ? "checked" : "" ?>>
                    <label for="gaming">gaming</label>
                    </div>
                    <div class="form-group">
                    <label for="skill">skill  </label>
                    <textarea name="skill" id="skill" cols="30" rows="10"><?= $mhs["skill"] ?></textarea>
                    </div>
                    <div class="form-group">
                    <select name="makanan_kesukaan" required>
                        <option value="">-- makanan kesukaan --</option>
                        <option value="nasi_goreng"<?= $mhs['makanan_kesukaan'] == 'nasi_goreng' ? "selected='selected'" : "" ?>>nasi goreng</option>
                        <option value="nasi_kuning"<?= $mhs['makanan_kesukaan'] == 'nasi_kuning' ? "selected='selected'" : "" ?>>nasi kuning</option>
                        <option value="nasi_merah"<?= $mhs['makanan_kesukaan'] == 'nasi_merah' ? "selected='selected'" : "" ?>>nasi merah</option>
                    </select>
                    </div>
                    <div class="form-group">
                <button type="submit" name="submit">Selesai!</button>
                </div>

    </form>
    
</body>
</html>

<?php
require 'fungsi.php';
    if( isset($_POST["submit"])){
        
        if( tambah($_POST) > 0){
            echo "<script>
                    alert('data berhasil ditambahkan!');
                    document.location.href='program.php'
            </script>";
        }else{
            echo "<script>
            alert('data gagal ditambahkan!');
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
    <title>Tambah Data Player</title>
</head>
<body>
    <h1>Tambah Data Player</h1>
    
    <form action="" method="post">
        
            <div class="form-group">
                    <label for="nama">nama  </label>
                    <input type="text" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                    <label for="npm">npm  </label>
                    <input type="text" name="npm" id="npm">
                    </div>
                    <div class="form-group">
                    <label for="email">email  </label>
                    <input type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                    <label for="password">password  </label>
                    <input type="text" name="password" id="password">
                    </div>
                    <div class="form-group">
                    <label for="jenis_kelamin">jenis kelamin  </label>
                    <label for="pria">pria</label>
                    <input type="radio" id="pria" name="jenis_kelamin" value="pria">
                    <label for="wanita">wanita</label>
	                <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
                    <label for="unknown">unknown</label>
	                <input type="radio" id="unknown" name="jenis_kelamin" value="unknown">
                    </div>
                    <div class="form-group">
                    <label for="umur">umur  </label>
                    <input type="text" name="umur" id="umur">
                    </div>
                    <div class="form-group">
                    <label for="asal">asal  </label>
                    <input type="text" name="asal" id="asal">
                    </div>
                    <div class="form-group">
                    <label for="no_hp">no hp  </label>
                    <input type="text" name="no_hp" id="no_hp">
                    </div>
                    <div class="form-group">
                    <label for="hobi">hobi  </label>
                    </div>
                    <div class="hobi">
                    <input type="checkbox" id="menyanyi" name="hobi" value="menyanyi">
                    <label for="menyanyi">menyanyi</label>
	                <input type="checkbox" id="olahraga" name="hobi" value="olahraga">
                    <label for="olahraga">olahraga</label>
	                <input type="checkbox" id="menari" name="hobi" value="menari">
                    <label for="menari">menari</label>
	                <input type="checkbox" id="gaming" name="hobi" value="gaming">
                    <label for="gaming">gaming</label>
                    </div>
                    <div class="form-group">
                    <label for="skill">skill  </label>
                    <textarea name="skill" id="skill" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                    <select name="makanan_kesukaan" required>
                        <option value="">-- makanan kesukaan --</option>
                        <option value="nasi_goreng">nasi goreng</option>
                        <option value="nasi_kuning">nasi kuning</option>
                        <option value="nasi_merah">nasi merah</option>
                    </select>
                    </div>
                    <div class="form-group">
                <button type="submit" name="submit">Selesai!</button>
                </div>
            

    </form>
    
</body>
</html>
<?php
 $conn = mysqli_connect("localhost", "root", "", "pemrograman");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars( $data["password"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $umur = htmlspecialchars($data["umur"]);
    $asal = htmlspecialchars($data["asal"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $hobi = htmlspecialchars($data["hobi"]);
    $skill = htmlspecialchars($data["skill"]);
    $makanan_kesukaan = htmlspecialchars($data["makanan_kesukaan"]);
   

     //query insert data
     $query = "INSERT INTO player
     VALUES
     ('$id', '$nama', '$npm',  '$email', '$password', '$jenis_kelamin', '$umur', '$asal', '$no_hp',
     '$hobi', '$skill', '$makanan_kesukaan')
     ";
    
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM player WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars( $data["password"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $umur = htmlspecialchars($data["umur"]);
    $asal = htmlspecialchars($data["asal"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $hobi = htmlspecialchars($data["hobi"]);
    $skill = htmlspecialchars($data["skill"]);
    $makanan_kesukaan = htmlspecialchars($data["makanan_kesukaan"]);

     //query insert data
     $query = "UPDATE player SET
                nama = '$nama',
                password = '$password',
                npm = '$npm',
                email = '$email',
                jenis_kelamin = '$jenis_kelamin',
                umur = '$umur',
                asal = '$asal',
                no_hp = '$no_hp',
                hobi = '$hobi',
                skill = '$skill',
                makanan_kesukaan = '$makanan_kesukaan'
                WHERE id= '$id'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>
)<?php
include('config.php');

$target_dir = "upload/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST['tambah']))
    {
        $filename = $_FILES['gambar']['name'];
        $a=date("Y-m-d H:i:s");
        if(move_uploaded_file($_FILES['gambar']['tmp_name'],'upload/'.$filename)){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $schools = $_POST['schools'];
            $grades = $_POST['grades'];
            $majors = $_POST['majors']; 
            $comment = $_POST['comment'];
            //$img = $_POST['img'];
        
            // buat query
            $sql = "INSERT INTO comment (firstname, lastname, schools, grades, majors, comment, img, date) VALUE ('$firstname', '$lastname','$schools','$grades','$majors','$comment','".$filename."','".$a."')";
            $query = mysqli_query($db, $sql);
        
            // apakah query simpan berhasil?
            if( $query ) {
                // kalau berhasil alihkan ke halaman index.php dengan status=sukses
                header("location: index.php?status=sukses");
                }
            } else {
                // kalau gagal alihkan ke halaman indek.php dengan status=gagal
                header('location: index.php?status=gagal');
            }
        }else{
            echo "Gagal terkirim :(";
        }
        // ambil data dari formulir
        
        exit;
        
?>
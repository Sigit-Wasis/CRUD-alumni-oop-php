<?php

    require_once 'app/model/class.bio.php';
 
    $auth_bio   = new Biodata();
 
    //Untuk menampilkan data di tabel
    $stmt = $auth_bio->runQuery("SELECT * FROM tb_alumni");
    $stmt->execute();
    
    $result = null;
    if ($stmt->rowCount() == 0) {
    }
    else {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[]   = "<td>".$row['nama']."</td><td>
                          ".$row['asal']."</td><td>"
                          .$row['jurusan']."</td><td>"
                          .$row['pengalaman']."</td><td>"
                          .$row['github']."</td><td>"
                          .$row['linkedin']."</td><td>"
                          .$row['facebook']."</td><td>"
                          .$row['prestasi']."</td><td>"
                          .$row['testimoni']."</td><td>"
                          .$row['foto']."</td><td>"
                          .$row['angkatan']."</td><td>
            <a class='btn btn-info' href='bio-edit.php?edit_ibio=".$row['id_bio']."'><span class='glyphicon glyphicon-edit'></span> Edit</a>
            <a class='btn btn-danger' href='?delete_ibio=".$row['id_bio']."'><span class='glyphicon glyphicon-remove-circle'></span> Delete</a>
        </td>";
        }
    }
 
    //Eksekusi untuk menghapus data
    if (isset($_GET['delete_ibio'])) {
        try {
            if ($auth_bio->deleteBio($ibio)) {
                $auth_bio->redirect('index.php?deleted');
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

// digunakan untuk menampilkan view
include 'app/view/header.php';
include 'app/view/menu.php';
include 'app/view/index.php';
include 'app/view/footer.php';

?>
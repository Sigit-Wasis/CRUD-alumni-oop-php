<?php
    require_once 'app/model/class.bio.php';
 
    //Untuk memanggil kelas biodata()
    $auth_bio = new Biodata();
 
    //Mengambil id_bio untuk menampilkan semua data di form edit
    if (isset($_GET['edit_ibio']) && !empty($_GET['edit_ibio'])) {
        $ibio       = $_GET['edit_ibio'];
        $stmt_edit  = $auth_bio->runQuery("SELECT * FROM tb_alumni WHERE id_bio =$ibio");
        $stmt_edit->execute(array($ibio));
        $edit_row   = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    }
    else {
        $auth_bio->redirect('index.php');
    }
 
    //Mengeksekusi data untuk di update
    if (isset($_POST['btn-update'])) {
        $nama   = $_POST['nama'];
        $asal  = $_POST['asal'];
        $jurusan = $_POST['jurusan'];
        $pengalaman = $_POST['pengalaman'];
        $github = $_POST['github'];
        $linkedin  = $_POST['linkedin'];
        $facebook  = $_POST['facebook'];
        $prestasi  = $_POST['prestasi'];
        $testimoni  = $_POST['testimoni'];
        $foto  = $_POST['foto'];
        $angkatan  = $_POST['angkatan'];
 
        if ($nama == "") {
            $error[]    = "Nama masih kosong!";
        }
        elseif ($asal == "") {
            $error[]    = "Asal masih kosong";
        }
        elseif ($jurusan == "") {
            $error[]    = "Jurusan masih kosong";
        }
        elseif ($pengalaman == "") {
            $error[]    = "Pengalaman masih kosong!";
        }
        elseif ($github == "") {
            $error[]    = "github masih kosong!";
        }
        elseif ($linkedin == "") {
            $error[]    = "linkedin masih kosong!";
        }
        elseif ($facebook == "") {
            $error[]    = "facebook masih kosong!";
        }
        elseif ($prestasi == "") {
            $error[]    = "prestasi masih kosong!";
        }
        elseif ($testimoni == "") {
            $error[]    = "testimoni masih kosong!";
        }
        elseif ($foto == "") {
            $error[]    = "foto masih kosong!";
        }
        elseif ($angkatan == "") {
            $error[]    = "angkatan masih kosong!";
        }
        else {
            try {
                if ($auth_bio->updateBio($nama, $asal, $jurusan, $pengalaman, $github, $linkedin, 
                $facebook, $prestasi, $testimoni, $foto, $angkatan, $ibio)) {
                    $auth_bio->redirect('index.php?saved');
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
 
 
    //Untuk menampilkan view
    include 'app/view/header.php';
    include 'app/view/menu.php';
    include 'app/view/bio-edit.blade.php';
    include 'app/view/footer.php';
 ?>
<?php
    require_once 'app/model/class.bio.php';
 
    $auth_bio = new Biodata();
 
    if (isset($_POST['btn-save'])) {
        $nama   = strip_tags($_POST['nama']);
        $asal  = strip_tags($_POST['asal']);
        $jurusan = strip_tags($_POST['jurusan']);
        $pengalaman = strip_tags($_POST['pengalaman']);
        $github = strip_tags($_POST['github']);
        $linkedin = strip_tags($_POST['linkedin']);
        $facebook = strip_tags($_POST['facebook']);
        $prestasi = strip_tags($_POST['prestasi']);
        $testimoni = strip_tags($_POST['testimoni']);
        $foto = strip_tags($_POST['foto']);
        $angkatan = strip_tags($_POST['angkatan']);
 
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
                if ($auth_bio->insertBio($nama,$asal,$jurusan,$pengalaman,$github,$linkedin,$facebook,$prestasi,$testimoni,$foto,$angkatan)) {
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
    include 'app/view/bio-add.blade.php';
    include 'app/view/footer.php';
 ?>
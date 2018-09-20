<?php
    require_once 'database.php';
 
    /**
     * CRUD
     */
    class Biodata
    {
        private $conn;
        public function __construct()
        {
            $database   = new Database();
            $db         = $database->dbConnection();
            $this->conn = $db;
        }
 
        public function runQuery($sql)
        {
            $stmt = $this->conn->prepare($sql);
            return $stmt;
        }
 
        public function insertBio($nama, $asal, $jurusan, $pengalaman, $github, $linkedin, $facebook, $prestasi, $testimoni, $foto, $angkatan)
        {
            try {
                $stmt = $this->conn->prepare(
                        "INSERT INTO tb_alumni (nama,asal,jurusan,pengalaman,github,linkedin,facebook,prestasi,testimoni,foto,angkatan)
                        VALUES(:nama,:asal,:jurusan,:pengalaman,:github,:linkedin,:facebook,:prestasi,:testimoni,:foto,:angkatan)"
                    );
                $stmt->bindParam(':nama', $nama);
                $stmt->bindParam(':asal', $asal);
                $stmt->bindParam(':jurusan', $jurusan);
                $stmt->bindParam(':pengalaman', $pengalaman);
                $stmt->bindParam(':github', $github);
                $stmt->bindParam(':linkedin', $linkedin);
                $stmt->bindParam(':facebook', $facebook);
                $stmt->bindParam(':prestasi', $prestasi); 
                $stmt->bindParam(':testimoni', $testimoni);
                $stmt->bindParam(':foto', $foto);
                $stmt->bindParam(':angkatan', $angkatan);

                $stmt->execute();
                
                return $stmt;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
 
        public function updateBio($nama, $asal, $jurusan, $pengalaman, $github, $linkedin, $facebook, $prestasi, $testimoni, $foto, $angkatan, $ibio)
        {
            try {
                $stmt = $this->conn->prepare(
                        "UPDATE tb_alumni
                        SET nama=:nama,
                            asal=:asal,
                            jurusan=:jurusan,
                            pengalaman=:pengalaman,
                            github=:github,
                            linkedin=:linkedin,
                            facebook=:facebook,
                            prestasi=:prestasi,
                            testimoni=:testimoni,
                            foto=:foto,
                            angkatan=:angkatan
                        WHERE id_bio = $ibio"
                    );
                    $stmt->bindParam(':nama', $nama);
                    $stmt->bindParam(':asal', $asal);
                    $stmt->bindParam(':jurusan', $jurusan);
                    $stmt->bindParam(':pengalaman', $pengalaman);
                    $stmt->bindParam(':github', $github);
                    $stmt->bindParam(':linkedin', $linkedin);
                    $stmt->bindParam(':facebook', $facebook);
                    $stmt->bindParam(':prestasi', $prestasi); 
                    $stmt->bindParam(':testimoni', $testimoni);
                    $stmt->bindParam(':foto', $foto);
                    $stmt->bindParam(':angkatan', $angkatan);
                $stmt->execute();
 
                return $stmt;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
 
        public function deleteBio($ibio)
        {
            $id = $_GET['delete_ibio'];
            if (isset($id)) {
                $stmt = $this->conn->prepare(
                        "DELETE FROM tb_alumni WHERE id_bio ='$id'"
                    );
                $stmt->bindParam('ibio', $id);
                $stmt->execute();
 
                return $stmt;
            }
        }
 
        public function redirect($url, $statusCode = 303)
        {
            header('Location: ' . $url, true, $statusCode);
            die();
        }
    }
 ?>
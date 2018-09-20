<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
            <h1 class="page-header">Data Alumni</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Add Data</li>
            </ol>
        </div>
    </div>
 
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            ?>
                            <div class="alert alert-danger">
                                <i class="glyphicons glyphicons-warning-sign"></i> &nbsp; <?php echo $error; ?>
                            </div>
                            <?php
                        }
                    }
                    elseif (isset($_GET['saved'])) {
                        ?>  
                               
                        <div class="alert alert-success">
                            <i class="glyphicons glyphicons-log-in"></i>&nbsp;Data Berhasil Disimpan!
                        </div>
                        <?php
                    }
                 ?>
            </div>
 
            <form method="post">
                <div class="form-group">
                    <label>Nama Lengkap:</label>
                    <input type="text" name="nama" placeholder="Contoh: Sigit wasis subekti" class="form-control">
                </div>
 
                <div class="form-group">
                    <label>Asal:</label>
                    <input type="text" name="asal" placeholder="Contoh: Lampung" class="form-control">
                </div>
 
                <div class="form-group">
                    <label>Jurusan:</label>
                    <input type="text" name="jurusan" placeholder="Contoh: Backend Developer" class="form-control">
                </div>

                <div class="form-group">
                    <label>Pengalaman:</label>
                    <textarea name="pengalaman" class="form-control" rows="3" placeholder=""></textarea>
                </div>

                <div class="form-group">
                    <label>Github:</label>
                    <input type="text" name="github" placeholder="Contoh: Sigit-wasis" class="form-control">
                </div>

                <div class="form-group">
                    <label>Linkedin:</label>
                    <input type="text" name="linkedin" placeholder="Contoh: sigit wasis subekti" class="form-control">
                </div>
 
                <div class="form-group">
                    <label>Facebook:</label>
                    <input type="text" name="facebook" placeholder="Contoh: sigitghoticmetal2001/5" class="form-control">
                </div>

                <div class="form-group">
                    <label>Prestasi:</label>
                    <input type="text" name="prestasi" placeholder="Contoh: juara 1" class="form-control">
                </div>

                <div class="form-group">
                    <label>Testimoni:</label>
                    <input type="text" name="testimoni" placeholder="" class="form-control">
                </div>

                <div class="form-group">
                    <label>Foto:</label>
                    <input type="text" name="foto" class="form-control">
                </div>

                <div class="form-group">
                    <label>Angkatan:</label>
                    <input type="text" name="angkatan" placeholder="Contoh: angkatan ke-2" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" name="btn-save" class="form-control btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
<br>
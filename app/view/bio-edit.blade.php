<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
            <h1 class="page-header">Data Alumni</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Edit Data</li>
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
                 ?>
            </div>
 
            <form method="post">
                <div class="form-group">
                    <label>Nama Lengkap:</label>
                    <input type="text" name="nama" value="<?php echo $edit_row['nama']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Asal:</label>
                    <input type="text" name="asal" value="<?php echo $edit_row['asal']; ?>" class="form-control">
                </div>
 
                <div class="form-group">
                    <label>Jurusan:</label>
                    <input type="text" name="jurusan" value="<?php echo $edit_row['jurusan']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Pengalaman:</label>
                    <textarea name="pengalaman" class="form-control" rows="3"><?php echo $edit_row['pengalaman'] ?></textarea>
                </div>

                <div class="form-group">
                    <label>Github:</label>
                    <input type="text" name="github" value="<?php echo $edit_row['github']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Linkedin:</label>
                    <input type="text" name="linkedin" value="<?php echo $edit_row['linkedin']; ?>" class="form-control">
                </div>
 
                <div class="form-group">
                    <label>Facebook:</label>
                    <input type="text" name="facebook" value="<?php echo $edit_row['facebook']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Prestasi:</label>
                    <input type="text" name="prestasi" value="<?php echo $edit_row['prestasi']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Testimoni:</label>
                    <input type="text" name="testimoni" value="<?php echo $edit_row['testimoni']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Foto:</label>
                    <input type="text" name="foto" value="<?php echo $edit_row['foto']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Angkatan:</label>
                    <input type="text" name="angkatan" value="<?php echo $edit_row['angkatan']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" name="btn-update" class="form-control btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
<br>

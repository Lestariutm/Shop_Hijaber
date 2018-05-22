<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT BERITA</h1>
                </div>
                <form action="<?php echo base_url('index.php/Admin_kerudung/update'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $query->kerudung_id; ?>">
                	<label>Jenis</label><br>
                    <input type="text" name="jenis" placeholder="Masukan Jenis kerudung" class="form-control" value="<?php echo $query->jenis; ?>"><br>
                    <label>Gambar kerudung</label><br>
                    <input type="file" class="form-control" name="kerudung"><br>
                    <label>Bahan</label>
                    <input type="text" name="bahan" placeholder="Masukan Bahan" class="form-control" value="<?php echo $query->bahan; ?>"><br>
                    <label>Warna</label><br>
                    <input type="text" name="warna" placeholder="Masukan Warna kerudung" class="form-control" value="<?php echo $query->warna; ?>"><br><br>

                	<a href="#" class="btn btn-primary">UPDATE</a>
                </form>

            </div>
        </div>
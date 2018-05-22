<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT BERITA</h1>
                </div>
                <form action="<?php echo base_url('index.php/Admin_busana/update'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $query->busana_id; ?>">
                	<label>Bahan</label><br>
                    <input type="text" name="bahan" value="<?php echo $query->bahan; ?>" placeholder="Masukan Jenis Bahan" class="form-control"><br>
                    <label>Gambar</label><br>
                    <input type="file" class="form-control" name="busana"><br>
                    <label>Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" placeholder="Masukan Ukuran" value="<?php echo $query->ukuran; ?>">

                	<a href="#" class="btn btn-primary">UPDATE</a>
                </form>

            </div>
        </div>